<title><?php echo $title; ?></title>

<h1>Home Page</h1>
<br>

<ul>
    <?php foreach($users as $user){ ?>
        <li><?php //print_r($user); 
        echo $user[0]; ?></li>
        <li><?php //print_r($user); 
        echo $user[1]; ?></li>
        <br>
    <?php }?>
</ul>

<a href="teste"><button>Teste</button></a>

