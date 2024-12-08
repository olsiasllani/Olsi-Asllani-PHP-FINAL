
<?php include_once 'header.php'; ?>

   <div class="jumbotron">
        <h1 class="display-3 ">Made with love</h1>
        <hr class="m-y-md">
        <p class="h">Is made with love, you will have the best tasty cakes in town.</p>
        <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Our menu</a>
        </p>
</div>
  
<h2>Top sellers </h1>
    <style type="text/css">.cards {
  display: grid;
  grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

.card_image {
  height: calc(13*1.2rem);
  padding: 1.2rem 1.2rem 0;
  position:relative;
}
.card_image:before,
.card_image:after{
  content: "";
  position: absolute;
  width: 20px;
  left: 60%;
  top: 0;
  height: 45px;
  background: #e6e6e6b8;
  transform: rotate(45deg);
}
.card_image:after{
  transform: rotate(-45deg);
  top:auto;
  bottom:-22px;
  left:40%;
}
.card_image img {
  width:100%;
  height:100%;
  object-fit:cover;
}

.cards_item {
  filter:drop-shadow(0 0 5px rgba(0, 0, 0, 0.25));
}


.card {
  background-color: white;
  border-radius: 0.25rem;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  padding-left: 30px;
  background: repeating-linear-gradient(#0000 0 calc(1.2rem - 1px),#66afe1 0 1.2rem) right bottom /100% 100%,linear-gradient(red 0 0) 30px 0/2px 100% #fff;
  background-repeat: no-repeat;
  line-height: 1.2rem;
  -webkit-mask:radial-gradient(circle .8rem at 2px 50%,#0000 98%,#000)0 0/100% 2.4rem;
}

.card_content {
  padding: 1.2rem;
}

h2.card_title,p {
  margin: 1.2rem 0;
}
h2.card_title {
    font-size: 1.3em;
}
body {
  font-family:monospace;
  background:#eee;

}
h2{
  display: flex;
 align-items: center;
 justify-content: center;
}
.h ,.display-3{
  color: black;
}
</style>
     
<div class="main">
  <ul class="cards">
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="eklera.jpg" alt="mixed vegetable salad in a mason jar. "></div>
        <div class="card_content">
          <h2 class="card_title">Eklera</h2>
          <div class="card_text">
            <p>   Të gjitha ëmbëlsirat e shkëlqyera kërkojnë kohë, por kjo e çon në nivelin tjetër! Eklera janë të mbushur me krem pastiçerie dhe sipër me shirup qokollate.</p>
            <p> Brumi, i cili është i njëjtë me atë që përdoret për profiterolin,pasi të ftohet, pasta mbushet me krem pastiçerie.Mbushjet e tjera përfshijnë kremin me fistek, mbushje me shije frutash.  </p>
          </div>
        </div>
      </div>
    </li>

    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="trileqe.jpg" alt="a Reuben sandwich on wax paper. "></div>
        <div class="card_content">
          <h2 class="card_title">Trileqe</h2>
          <div class="card_text">
            <p>Trileqe  është një tortë sfungjerore e ngjyer në tri lloje të qumështit: qumësht pluhur, qumësht i kondensuar, dhe ajkë.
            </p>
            <p>Kur nuk përdoret gjalpi, Trileçja është një tortë shumë e lehtë, me plot fluska të ajrit në brendësi. Kjo cilësi e veçantë, bën që ajo të mos ketë permbajtje të lagësht, pavarësisht se është ngjyer në një përzierje të tri llojeve të qumështit </p>
            <p>Kurse siper bëhet me krem karameli,mund te bëhet edhe me lloje tjera si me krem fisteku,krem me shije frutash.
            <p>
            
          </div>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="pistachioch.jpg" alt="A side view of a plate of figs and berries. "></div>
        <div class="card_content">
          <h2 class="card_title">Cheesecake me krem fisteku</h2>
          <div class="card_text">
            <p><span class="note">Shije e shkëlqyeshme.</span></p>
            <p>Cheesecake është një ëmbëlsirë e bërë me një djathë të butë të freskët zakonisht  krem djathi , vezë dhe sheqer .Mund të ketë një kore ose bazë të bërë nga biskota të grimcuara ose me kadaif dhe krem fisteku</p>
            <p>Në shtresën kryesore të djathit mund të shtohen vanilje, qumësht i kodensuar, limon, çokollatë, krem fisteku,shije frutash  ose shije të tjera.. </p>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>

        
<?php

   if(!empty($_SESSION['username'])){
      echo "Hello, ".$_SESSION['username'];

      echo "<br><a href='logout.php'>Log out</a>";
   }

?>


<?php include_once 'footer.php'; ?>



     
   </body>
</html>
</body>
</html