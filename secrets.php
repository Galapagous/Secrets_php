<?php include 'inc/header.php'?>
<?php
    if(isset($_POST['submit'])){
        $name = $email = $body = '';
        $nameErr = $emailErr = $bodyErr = '';
        // Validate name
        if(empty($_POST['name'])){
            $nameErr = 'Name is required';
        }else{
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        // Validate email
        if(empty($_POST['email'])){
            $emailErr = 'Email is required';
        }else{
            filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        }
        //validate body
        if(empty($_POST['body'])){
            $bodyErr = 'Secret are required';
        }else{
            $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        // writing to database
        if (empty($nameErr) && empty($emailErr) && empty($bodyErr)){
            //write to database
            $sql = 'INSERT INTO secrets (name, email, body) VALUES(?, ?, ?)';
            $smt = mysqli_prepare($conn, $sql);

            // bind parameter
            mysqli_stmt_bind_param($smt, 'sss', $name, $email, $body);
            if(mysqli_stmt_execute($smt)){
                //success
                header('Location: index.php');
            }else{
                // error
                echo 'Error' . mysqli_error($conn);
            }
        }
    }

?>
<section class="flex h-screen flex-col items-center content-center gap-6 text-center bg-slate-200">
    <div class="flex flex-col align-center justify-center mt-4">
        <img class="w-14 h-14 rounded-full m-auto mb-2 object-cover" src="./Assets/secret1.jpg" alt="type your secrets">
        <h2>Secrets</h2>
        <p>That secret you hold dearly in your heart and want the world to know</p>
    </div>
    <form class="flex flex-col align-center justify-center gap-4" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> method="POST">
        <input class="p-2 outline-none is-invalid" type="text" placeholder="username" name="name" required>
        <input class="p-2 outline-none" type="text" placeholder="email" name="email" required>
        <textarea class="p-2 outline-none h-48" name="body" cols="30" rows="10" placeholder="Your secret" required></textarea>
        <input class="cursor-pointer p-2 bg-slate-400 text-slate-100 hover:bg-slate-600 hover:font-bold" type="submit" name="submit">
    </form>
</section>
<?php include 'inc/footer.php'?>