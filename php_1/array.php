<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids; // Lengkapi di sini
        echo "<p>kids</p>";
        $kids = array("mike","dustin","will","lucas","max","eleven");
        print_r($kids);
        $adults; 
        echo "<p>adults</p>";
        $adults = array("hooper","nancy","joyce","jonathan","murrray");
        print_r($adults);
        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids:  " ; // Berapa panjang array kids
        echo count($kids);
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        // Lanjutkan
        echo "<li> $kids[1] </li>";
        echo "<li> $kids[2] </li>";
        echo "<li> $kids[3] </li>";
        echo "<li> $kids[4] </li>";
        echo "<li> $kids[5] </li>";

        echo "</ol>";
        
        echo "Total Adults: " ;// Berapa panjang array adults
        echo count($adults);
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        // Lanjutkan
        echo "<li> $adults[1] </li>";
        echo "<li> $adults[2] </li>";
        echo "<li> $adults[3] </li>";
        echo "<li> $adults[4] </li>";

        echo "</ol>";


        echo "<h3> Soal 3 </h3>";
        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
                $kids = array  ("Nama" => "Will Byers" ,
                               "Age" =>" 12",
                               "Aliases" => "Will The Wise" ,
                               "Status" => "Alive");
                               print_r($kids);
                        echo "<br>";       
                $kids = array  ("Nama" => "Mike Wheeler",
                               "Age" =>" 12",
                               "Aliases" => "Dungeon Master",
                               "Status" => "Alive");
                               print_r($kids);
                        echo "<br>";

                $adults = array  ("Nama" => "Jim Hopper",
                               "Age" =>" 43",
                               "Aliases" => "Chief Hopper",
                               "Status" => "Deceased");
                               print_r($adults);
                        echo "<br>";

                $kids = array  ("Nama" => "eleven",
                               "Age" =>" 12",
                               "Aliases" => "El",
                               "Status" => "Alive");
                               print_r($kids);
                               
                               
                                              
    ?>
      <br><br><br><br> <br><br><br><br><br><br><br><br> <br><br><br><br>
</body>
</html>