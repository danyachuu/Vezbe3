<?php
    if (isset($_POST['submit']) && $_POST['submit'] == "izmeni" && isset($_POST['id_predmeta'])) {
        $prijava = new Prijava($_POST['id_prijava'], $_POST['predmet'], $_POST['katedra'],$_POST['sala'],$_POST['datum']);
        $status = Prijava::update($prijava, $conn);
       
        
        if ($status) {
            echo "uspesno izmenjeno";
        } else {
            echo "neuspesno";
                   
        }
        
        
    }
?>