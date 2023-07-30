<?php include 'inc/header.php'?>
<?php 
    $sql = 'SELECT * FROM secrets';
    $result = mysqli_query($conn, $sql);
    $secrets = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
    <section id="hero" class="w-screen h-screen">
        <div class="w-full mx-auto h-full bg-slate-400 mx-auto relative">
            <img class="w-full h-full object-cover" src="./Assets/secret2.jpg" alt="">
            <div class="absolute w-5/6 h-full flex items-center justify-center flex-wrap top-0 left-0 overflow-auto gap-4 mx-20">
            <?php if(!$result): ?>
            <p class="text-red-500">No secrets Today</p>
            <?php endif; ?>
            <?php foreach($secrets as $secret): ?>
            <div class="flex w-72 h-72 flex-col items-start text-slate-800 bg-slate-200 gap-2 rounded-sm mb-2 border-2 border-slate-500">
                    <div class="text-center w-full">
                        <img class="w-full h-24 object-cover" src="./Assets/secret1.jpg" alt="secret_img">
                    </div>
                    <div class="bg-slate-950 text-slate-100 p-2 w-full">
                        <span class="mr-2"><?php echo $secret['name'];?></span>
                        <span class="inline"><?php echo $secret['date'];?></span>
                    </div>
                    <p class="rounded-sm p-2 "><?php echo $secret['body'];?></p>
            </div>
            <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php include 'inc/footer.php' ?>