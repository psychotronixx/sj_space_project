<?php
    require("partials/header.php");
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false){
        header('Location: 404.php');
    }
?>
    <main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
                <h1>Admin rozhranie</h1>
                <br><br>
                <h2>Kontakty</h2>
                <button onclick="document.getElementById('addContactForm').style.display='block'">Add Contact</button>
                <div id="addContactForm" style="display:none;">
                    <form action="" method="POST">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <textarea name="message" placeholder="Message" required></textarea>
                        <input type="text" name="acceptance" placeholder="Acceptance" required>
                        <button type="submit" name="add_contact">Add</button>
                    </form>
                </div>

                <?php
                    $contact_object = new Contact();
                    $contacts = $contact_object->select();
                    if(isset($_POST['delete_contact'])){
                        $contact_id = $_POST['delete_contact'];
                        $contact_object->delete($contact_id);
                        header('Location: ' . $_SERVER['PHP_SELF']);
                        exit();
                    }
                    echo '<table class="admin-table">';
                    echo '<tr><th>Name</th>
                              <th>Email</th>
                              <th>Message</th>
                              <th>Acceptance</th>
                              <th>Delete</th>
                          </tr>';
                    foreach($contacts as $c){
                        echo '<tr>';
                        echo '<td>'.$c->name;'</td>';
                        echo '<td>'.$c->email;'</td>';
                        echo '<td>'.$c->message;'</td>';
                        echo '<td>'.$c->acceptance;'</td>';
                        echo '<td>
                                <form action="" method="POST">
                                    <button type="submit" name="delete_contact" value="'.$c->id.'">Vymazať</button>
                                </form>
                                <form action="" method="GET">
                                    <button type="submit" name="edit_contact" value="'.$c->id.'">Edit</button>
                                </form>
                            </td>';
                        echo '</tr>';
                    }
                        
                    echo '</table>';

                    if (isset($_POST['add_contact'])) {
                        $data = [
                            'name' => $_POST['name'],
                            'email' => $_POST['email'],
                            'message' => filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                            'acceptance' => $_POST['acceptance']
                        ];
                        $contact_object->insert($data);
                        header('Location: ' . $_SERVER['PHP_SELF']);
                        exit();
                    }
                ?>

                <br><br>
                <h2>QNA</h2>
                <button onclick="document.getElementById('addQnaForm').style.display='block'">Add QNA</button>
                <div id="addQnaForm" style="display:none;">
                    <form action="" method="POST">
                        <input type="text" name="question" placeholder="Question" required>
                        <textarea name="answer" placeholder="Answer" required></textarea>
                        <button type="submit" name="add_qna">Add</button>
                    </form>
                </div>

                <?php
                    $qna_object = new Qna();
                    $qna = $qna_object->select();
                    if(isset($_POST['delete_qna'])){
                        $qna_id = $_POST['delete_qna'];
                        $qna_object->delete($qna_id);
                        header('Location: admin.php');
                        exit();
                    }
                    echo '<table class="admin-table">';
                    echo '<tr><th>Question</th>
                              <th>Answer</th>
                              <th>Delete</th>
                          </tr>';

                    if (isset($_GET['edit_contact'])) {
                        $contact_id = $_GET['edit_contact'];
                        $contact_to_edit = $contact_object->selectById($contact_id);
                        echo '<form action="" method="POST">
                                <input type="hidden" name="contact_id" value="'.$contact_id.'">
                                <input type="text" name="name" value="'.$contact_to_edit->name.'">
                                <input type="email" name="email" value="'.$contact_to_edit->email.'">
                                <textarea name="message">'.$contact_to_edit->message.'</textarea>
                                <input type="text" name="acceptance" value="'.$contact_to_edit->acceptance.'">
                                <button type="submit" name="update_contact">Update</button>
                            </form>';
                    }

                    foreach($qna as $q){
                        echo '<tr>';
                        echo '<td>'.$q->question;'</td>';
                        echo '<td>'.$q->answer;'</td>';
                        echo '<td>
                                <form action="" method="POST">
                                    <button type="submit" name="delete_qna" value="'.$q->id.'">Vymazať</button>
                                </form>
                                <form action="" method="GET">
                                    <button type="submit" name="edit_qna" value="'.$q->id.'">Edit</button>
                                </form>
                            </td>';
                        echo '</tr>';
                    }
                    echo '</table>';

                    if (isset($_GET['edit_qna'])) {
                        $qna_id = $_GET['edit_qna'];
                        $qna_to_edit = $qna_object->selectById($qna_id);
                        echo '<form action="" method="POST">
                                <input type="hidden" name="qna_id" value="'.$qna_id.'">
                                <input type="text" name="question" value="'.$qna_to_edit->question.'">
                                <textarea name="answer">'.$qna_to_edit->answer.'</textarea>
                                <button type="submit" name="update_qna">Update</button>
                              </form>';
                    }

                    if (isset($_POST['update_contact'])) {
                        $data = [
                            'id' => $_POST['contact_id'],
                            'name' => $_POST['name'],
                            'email' => $_POST['email'],
                            'message' => filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                            'acceptance' => $_POST['acceptance']
                        ];
                        $contact_object->update($data);
                        header('Location: ' . $_SERVER['PHP_SELF']);
                        exit();
                    }
                    
                    // Handle QNA Update
                    if (isset($_POST['update_qna'])) {
                        $data = [
                            'id' => $_POST['qna_id'],
                            'question' => $_POST['question'],
                            'answer' => $_POST['answer']
                        ];
                        $qna_object->update($data);
                        header('Location: ' . $_SERVER['PHP_SELF']);
                        exit();
                    }

                    if (isset($_POST['add_qna'])) {
                        $data = [
                            'question' => $_POST['question'],
                            'answer' => $_POST['answer']
                        ];
                        $qna_object->insert($data);
                        header('Location: ' . $_SERVER['PHP_SELF']);
                        exit();
                    }
                    
                    
                ?>
            </div>
        </div>
    </section> 
</main>
<?php
    include('partials/footer.php');





// Part of the QNA Section




// Handle Contact Update


?>