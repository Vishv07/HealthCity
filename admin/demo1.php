 


 <?php 


 $command = escapeshellcmd("C:\Users\Krishna\AppData\Local\Programs\Python\Python37\python.exe bmi.py Ahmedabad 30 Male");
    $output = shell_exec($command);
    echo $output;

    ?>