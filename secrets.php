<?php include 'inc/header.php'?>
<section class="flex h-screen flex-col items-center content-center gap-6 text-center bg-slate-200">
    <div class="flex flex-col align-center justify-center mt-4">
        <img class="w-14 h-14 rounded-full m-auto mb-2 object-cover" src="./Assets/secret1.jpg" alt="type your secrets">
        <h2>Secrets</h2>
        <p>That secret you hold dearly in your heart and want the world to know</p>
    </div>
    <form class="flex flex-col align-center justify-center gap-4" action=<?php echo $_SERVER['PHP_SELF'] ?> method="POST">
        <input class="p-2 outline-none" type="text" placeholder="username" name="name">
        <input class="p-2 outline-none" type="text" placeholder="email" name="email">
        <textarea class="p-2 outline-none h-48" name="body" cols="30" rows="10" placeholder="Your secret"></textarea>
        <input class="cursor-pointer p-2 bg-slate-400 text-slate-100 hover:bg-slate-600 hover:font-bold" type="submit" name="submit">
    </form>
</section>
<?php include 'inc/footer.php'?>