<?php 
      //CALZAS (1,2,3)
      $calza1=$pdo->prepare("SELECT * FROM tblproductos WHERE id=1");
      $calza1->execute();
      $CALZA1=$calza1->fetchAll(PDO::FETCH_ASSOC);

      $calza2=$pdo->prepare("SELECT * FROM tblproductos WHERE id=2");
      $calza2->execute();
      $CALZA2=$calza2->fetchAll(PDO::FETCH_ASSOC);


      $calza3=$pdo->prepare("SELECT * FROM tblproductos WHERE id=3");
      $calza3->execute();
      $CALZA3=$calza3->fetchAll(PDO::FETCH_ASSOC);

      //REMERAS (4,5,6)

      $remera1=$pdo->prepare("SELECT * FROM tblproductos WHERE id=4");
      $remera1->execute();
      $REMERA1=$remera1->fetchAll(PDO::FETCH_ASSOC);

      $remera2=$pdo->prepare("SELECT * FROM tblproductos WHERE id=5");
      $remera2->execute();
      $REMERA2=$remera2->fetchAll(PDO::FETCH_ASSOC);


      $remera3=$pdo->prepare("SELECT * FROM tblproductos WHERE id=6");
      $remera3->execute();
      $REMERA3=$remera3->fetchAll(PDO::FETCH_ASSOC);
 
      //SOMBREROS (7,8,9)

      $sombrero1=$pdo->prepare("SELECT * FROM tblproductos WHERE id=7");
      $sombrero1->execute();
      $SOMBRERO1=$sombrero1->fetchAll(PDO::FETCH_ASSOC);

      $sombrero2=$pdo->prepare("SELECT * FROM tblproductos WHERE id=8");
      $sombrero2->execute();
      $SOMBRERO2=$sombrero2->fetchAll(PDO::FETCH_ASSOC);


      $sombrero3=$pdo->prepare("SELECT * FROM tblproductos WHERE id=9");
      $sombrero3->execute();
      $SOMBRERO3=$sombrero3->fetchAll(PDO::FETCH_ASSOC);

      //pantalones (10,11,12)
      
      $pantalon1=$pdo->prepare("SELECT * FROM tblproductos WHERE id=10");
      $pantalon1->execute();
      $PANTALON1=$pantalon1->fetchAll(PDO::FETCH_ASSOC);

      $pantalon2=$pdo->prepare("SELECT * FROM tblproductos WHERE id=11");
      $pantalon2->execute();
      $PANTALON2=$pantalon2->fetchAll(PDO::FETCH_ASSOC);


      $pantalon3=$pdo->prepare("SELECT * FROM tblproductos WHERE id=12");
      $pantalon3->execute();
      $PANTALON3=$pantalon3->fetchAll(PDO::FETCH_ASSOC);


      ?>  
    









    
      