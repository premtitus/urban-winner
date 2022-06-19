
<style>

.wrapper {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-column-gap: 2vw;
  grid-row-gap:2vw;
}

.top {
  grid-column-start: 1;
  grid-column-end: 6;
  grid-row-start: 1;
  grid-row-end: 2;
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr)); minmax(0, 1fr);
  grid-template-rows:1;
  grid-column-gap:2vw;
}

.top-left {
  grid-column-start:1;
  grid-column-end:1;
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr)); minmax(0, 1fr);
  grid-template-rows:1;
  grid-column-gap:2vw;
  
}

.register {
  grid-column-start:1;
  grid-column-end:1;
}
.login {
  grid-column-start:2;
  grid-column-end:2;
}

.top-right {
  grid-column-start:2;
  grid-column-end:2;
  color:#040075;
  text-align: right;
  padding: 1vw 2vw;
}

<?php
if(isset($rowsneeded1)==false){
    $rowsneeded1 = 0;
}
if(isset($rowsneeded2)==false){
    $rowsneeded2 = 0;
}
if(isset($rowsneeded3)==false){
    $rowsneeded3 = 0;
}
if(isset($rowsneeded4)==false){
    $rowsneeded4 = 0;
}
if(isset($rowsneeded5)==false){
    $rowsneeded5 = 0;
}
if(isset($rowsneeded6)==false){
    $rowsneeded6 = 0;
}
if(isset($rowsneeded7)==false){
    $rowsneeded7 = 0;
}
if(isset($rowsneeded8)==false){
    $rowsneeded8 = 0;
}
if(isset($rowsneeded9)==false){
    $rowsneeded9 = 0;
    
}
if(isset($rowsneeded10)==false){
    $rowsneeded10 = 0;
}
?>
.main {
  grid-column-start: 1;
  grid-column-end: 5;
  position:relative;
  display: grid;
  grid-template-columns: repeat(40, minmax(0, 1fr));
  grid-template-rows: 25px, 25px, 25px, 25px, 25px, 25px, repeat(<?php echo $rowsneeded1+$rowsneeded2+$rowsneeded3+$rowsneeded4+$rowsneeded5+$rowsneeded6+$rowsneeded7+$rowsneeded8+$rowsneeded9+$rowsneeded10+5?>, minmax(0, 1fr));
  grid-column-gap:0.2vw;
  grid-row-gap:2vw;
  grid-template-rows: auto 1fr;
  background-color:#a1b7ff;
  border-radius:10px;
  box-sizing: border-box;
  }
textarea {
    box-sizing: border-box;
    resize: vertical;
    width: 100%;
    border-radius: 15px;
    padding: 1em;
    font-family: "Times New Roman", Times, serif;
    font-size: calc( 0.25vw + 10px );
    background-color: #e4f0f5;
}
.footer {
  grid-column-start: 3;
  grid-column-end: 39;
  grid-row-start: <?php echo $rowsneeded1+$rowsneeded2+$rowsneeded3+$rowsneeded4+$rowsneeded5+$rowsneeded6+$rowsneeded7+$rowsneeded8+$rowsneeded9+$rowsneeded10?>;
  grid-row-end: <?php echo $rowsneeded1+$rowsneeded2+$rowsneeded3+$rowsneeded4+$rowsneeded5+$rowsneeded6+$rowsneeded7+$rowsneeded8+$rowsneeded9+$rowsneeded10+4?>;
  background-color: coral;
  background-color:#aaa1ff;
  border-radius:10px;
  box-sizing: border-box;
}

.subject {
    background-color:#bacaff;
    grid-column-start:13;
    grid-column-end:40;
    grid-row-start:2;
    grid-row-end:3;
    border-radius:10px;
    font-weight:bold;
    max-height:20px;
}
.message1 {
    grid-row-start:3;
    grid-row-end:<?php echo $rowsneeded1?>;
    grid-column-start:13;
    grid-column-end:40;
    box-sizing: border-box;
    border-radius:10px;
}

.message2 {
    grid-row-start:<?php echo $rows1 = $rowsneeded1?>;
    grid-row-end:<?php echo $rows2=$rowsneeded1 + $rowsneeded2?>;
    grid-column-start:13;
    grid-column-end:40;
    border-radius:10px;
    box-sizing: border-box;
}
.message3 {
    grid-row-start:<?php echo $rowsneeded1 + $rowsneeded2?>;
    grid-row-end:<?php echo $rows3 = $rowsneeded1 + $rowsneeded2 + $rowsneeded3?>;
    border-radius:10px;
    grid-column-start:13;
    grid-column-end:40;
}
.message4 {
    grid-row-start:<?php echo $rowsneeded1 + $rowsneeded2 + $rowsneeded3?>;
    grid-row-end:<?php echo $rows4 = $rowsneeded1 + $rowsneeded2 + $rowsneeded3 + $rowsneeded4?>;
    border-radius:10px;
    grid-column-start:13;
    grid-column-end:40;
}
.message5 {
    grid-row-start:<?php echo $rowsneeded1 + $rowsneeded2 + $rowsneeded3 + $rowsneeded4?>;
    grid-row-end:<?php echo $rows5 = $rowsneeded1 + $rowsneeded2 + $rowsneeded3 + $rowsneeded4 + $rowsneeded5 ?>;
    border-radius:10px;
    grid-column-start:13;
    grid-column-end:40;
}
.message6 {
    grid-row-start:<?php echo $rowsneeded1 + $rowsneeded2 + $rowsneeded3 + $rowsneeded4 + $rowsneeded5 ?>;
    grid-row-end:<?php echo $rows6 = $rowsneeded1 + $rowsneeded2 + $rowsneeded3 + $rowsneeded4 + $rowsneeded5 +$rowsneeded6 ?>;
    border-radius:10px;
    grid-column-start:13;
    grid-column-end:40;
}
.message7 {
    grid-row-start:<?php echo $rowsneeded1 + $rowsneeded2 + $rowsneeded3 + $rowsneeded4 + $rowsneeded5 +$rowsneeded6 ?>;
    grid-row-end:<?php echo $rows7 = $rowsneeded1 + $rowsneeded2 + $rowsneeded3 + $rowsneeded4 + $rowsneeded5 + $rowsneeded6 + $rowsneeded7?>;
    border-radius:10px;
    grid-column-start:13;
    grid-column-end:40;
}
.message8 {
    grid-row-start:<?php echo $rowsneeded1 + $rowsneeded2 + $rowsneeded3 + $rowsneeded4 + $rowsneeded5 + $rowsneeded6 + $rowsneeded7 ?>;
    grid-row-end:<?php echo $rows8 = $rowsneeded1 + $rowsneeded2 + $rowsneeded3 + $rowsneeded4 + $rowsneeded5 + $rowsneeded6 + $rowsneeded7 + $rowsneeded8 ?>;
    border-radius:10px;
    grid-column-start:13;
    grid-column-end:40;
}
.message9 {
    grid-row-start:<?php echo $rowsneeded1 + $rowsneeded2 + $rowsneeded3 + $rowsneeded4 + $rowsneeded5 + $rowsneeded6 + $rowsneeded7 + $rowsneeded8 ?>;;
    grid-row-end:<?php echo $rows9 = $rowsneeded1 + $rowsneeded2 + $rowsneeded3 + $rowsneeded4 + $rowsneeded5 + $rowsneeded6 + $rowsneeded7 + $rowsneeded8 +$rowsneeded9 ?>;;
    border-radius:10px;
    grid-column-start:13;
    grid-column-end:40;
}
.message10 {
    grid-row-start:<?php echo $rowsneeded1 + $rowsneeded2 + $rowsneeded3 + $rowsneeded4 + $rowsneeded5 + $rowsneeded6 + $rowsneeded7 + $rowsneeded8 +$rowsneeded9?>;
    grid-row-end:<?php echo $rows10 = $rowsneeded1 + $rowsneeded2 + $rowsneeded3 + $rowsneeded4 + $rowsneeded5 + $rowsneeded6 + $rowsneeded7 + $rowsneeded8 +$rowsneeded9 + $rowsneeded10?>;
    border-radius:10px;
    grid-column-start:13;
    grid-column-end:40;
}

.medaldetail {
    grid-column-start:2;
    grid-column-end:12;
    grid-row-start:3;
    grid-row-end:5;
    font-weight:bold;
}
.userdetails{
    grid-column-start:2;
    grid-column-end:12;
    grid-row-start:5;
    grid-row-end:7;
}
.numberofposts {
    grid-column-start:2;
    grid-column-end:12;
    grid-row-start:7;
    grid-row-end:9;
}

<?php
for($x=2; $x<=10; $x++) {
    $index = "rows" . strval($x);
    $index = $$index;
    $pastindex = "rows" . strval($x-1);
    $pastindex = $$pastindex;
    $medalindex = $pastindex+2;
    $userindex = $medalindex+2;
    $postnoindex = $userindex+2;
    $stylesetteruserinfo = <<<END
                            .medaldetails$x {
                                grid-column-start:2;
                                grid-column-end:12;
                                grid-row-start:$pastindex;
                                grid-row-end:$medalindex;
                                font-weight:bold;
                                border-radius: 10px;
                            }
                            .userdetails$x{
                                grid-column-start:2;
                                grid-column-end:12;
                                grid-row-start:$medalindex;
                                grid-row-end:$userindex;
                                border-radius: 10px;
                            }
                            .numberofposts$x {
                                grid-column-start:2;
                                grid-column-end:12;
                                grid-row-start:$userindex;
                                grid-row-end:$postnoindex;
                                border-radius: 10px;
                            }
                            END;
    echo $stylesetteruserinfo;
}
?>
.medaldetail {
    grid-column-start:2;
    grid-column-end:12;
    grid-row-start:3;
    grid-row-end:5;
}
.medaldetail, .medaldetails2, .medaldetails3, .medaldetails4, .medaldetails5, .medaldetails6, .medaldetails7, .medaldetails8, .medaldetails9, .medaldetails10 {
    font-weight:bold;
    border-radius: 10px;
}
.userdetails{
    grid-column-start:2;
    grid-column-end:12;
    grid-row-start:5;
    grid-row-end:7;
}
.userdetails, .userdetails2, .userdetails3, .userdetails4, .userdetails5, .userdetails6, .userdetails7, .userdetails8, .userdetails9, .userdetails10, .numberofposts, .numberofposts2, .numberofposts3, .numberofposts4, .numberofposts5, .numberofposts6, .numberofposts7, .numberofposts8, .numberofposts9, .numberofposts10 {
    border-radius: 10px;
}
.numberofposts {
    grid-column-start:2;
    grid-column-end:12;
    grid-row-start:7;
    grid-row-end:9;
}

.medaldetail, .medaldetails2, .medaldetails3, .medaldetails4, .medaldetails5, .medaldetails6, .medaldetails7, .medaldetails8, .medaldetails9, .medaldetails10, .userdetails, .userdetails2, .userdetails3, .userdetails4, .userdetails5, .userdetails6, .userdetails7, .userdetails8, .userdetails9, .userdetails10, .medaldetail, .userdetails, .numberofposts, .subject, .numberofposts, .numberofposts2, .numberofposts3, .numberofposts4, .numberofposts5, .numberofposts6, .numberofposts7, .numberofposts8, .numberofposts9, .numberofposts10{

    font-size: calc( 0.5vw + 8px );
    padding: calc(0.5vw + 2px);
    text-align: center;
}
.message1, .message2, .message3, .message4, .message5, .message6, .message7, .message8, .message9, .message10 {
    font-size: calc( 0.5vw + 8px );
    padding: calc(0.5vw + 4px);
    text-align:left;
    background-color:#bacaff;
    
}


</style>