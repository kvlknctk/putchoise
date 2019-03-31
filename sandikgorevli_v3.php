<?php
    require_once 'conf/config.php';


    sleep(2);

    $electioner = $_POST['tcno'];
    $choise     = $_POST['choise'];


    function oyla($electioner, $choise){

        echo json_encode([$electioner, $choise]);
    }


    oyla($electioner, $choise);



/*

    if (isset($electioner) AND isset($choise)) {
        $duzelt = $db->prepare('Update secmenlerson set oykullandimi=? where tc=?');
        $duzelt->execute([$choise, $electioner]);
        return json_encode(1);
    }*/










    /*  if (@$_SESSION["sandikno-okulid"] == $sandikID and
          @$_SESSION["izin"] == 0 and
          @$_SESSION["okulgorevli"] == 0 and
          @$_SESSION["okullar"] == 0 and
          @$_SESSION["oykullanmayan"] == 0 and
          @$_SESSION["muhtar"] == 0) {

          $kayitlimiduzelttc = @$_GET["OnayDuzelttc"];

          if (isset($kayitlimiduzelttc)) {

              $kayitlimisorgu = $db->prepare('select * from secmenlerson where tc= ?');
              $kayitlimisorgu->execute([$kayitlimiduzelttc]);
              $kayitlimiliste = $kayitlimisorgu->fetch(PDO::FETCH_ASSOC);


              if ($kayitlimiliste['oykullandimi'] == 0) {
                  $duzelt = $db->prepare('Update secmenlerson set oykullandimi=1 where tc=?');
                  $duzelt->execute([$kayitlimiduzelttc]);
                  header("Location:sandikgorevli.php?sandikid=$sandikID");
              } else {
                  $duzelt = $db->prepare('Update secmenlerson set oykullandimi=0 where tc=?');
                  $duzelt->execute([$kayitlimiduzelttc]);
                  header("Location:sandikgorevli.php?sandikid=$sandikID");
              }

          }

      }*/
?>