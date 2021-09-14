<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<h1>Портфолио</h1>
<p>
<table>
    Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
    <tr>
        <td>Год</td>
        <td>Проект</td>
        <td>Описание</td>
    </tr>
    <?php
        $table_begin = <<<EOT
            document.write('<table style="border: solid;">');
            document.write('<thead><tr><td colspan = "3" style="text-align: center;">Фоточки</td></tr></thead><tbody>');
        EOT;
        echo $table_begin;
        for($i = 0; $i<5;$i++){
        //for ($i = 0; $i < count($data[0]); $i++) {
            //echo '<tr><td>' . $data[0][$i] . '</td><td>' . $data[1][$i] . '</td><td>чото</td></tr>';
            for($ii = 0;$ii<3;$ii++){
            echo '<td><figure><img src="'.$data[0][$i].'" alt="Динозаврик" title="'.$data[0][$i].
            '" width=200 onclick="modal_shit(this)"><figcaption>'.$data[0][$i].'</figcaption></figure></td>';
            };
            echo 'document.write("</tr>");';
        };
        echo "document.write('</tbody></table>');";



    ?>
</table>
</p>
<?php

$text = <<<EOT
        <script>
            var images = [
                'img/1.jpg','img/2.jpg','img/3.jpg',
                'img/4.jpg','img/5.jpg','img/6.jpg',
                'img/7.jpg','img/8.jpg','img/9.jpg',
                'img/10.jpg','img/11.jpg','img/12.jpg',
                'img/13.jpg','img/14.jpg','img/15.jpg'
            ];
            var titles = [
            'Дельфин','Пастор','Переплата',
            'Мазила','Тормоз','Опорник',
            'Пас назад','Навес','Хендо',
            'Криминал','Собака','Молодежь',
            'Жирафа','Доцик','Жопа'
        ];
            function table(cols, rows){
                document.write('<table style="border: solid;">');
                document.write('<thead><tr><td colspan = "'+cols+'" style="text-align: center;">Фоточки</td></tr></thead><tbody>');
                var iii = 0;
                for (var i=0; i< rows; i++) {
                    document.write("<tr>");
                    for (var ii=0; ii<cols; ii++){
                        document.write('<td><figure><img src="'+images[iii]+'" alt="Динозаврик" title="'+titles[iii]+
                            '" width=200 onclick="modal_shit(this)"><figcaption>'+titles[iii]+'</figcaption></figure></td>');
                        iii++;
                    }
                    document.write("</tr>");
                }
                document.write('</tbody></table>');
            }

            var span = document.getElementsByClassName("close")[0];
            var modal = document.getElementById("myModal");
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");

            // When the user clicks on <span> (x), close the modal
            /*function modal_shit(image){
                var modal = document.getElementById("myModal");
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");

                modal.style.display = "block";
                
                modalImg.src = image.src;
                captionText.innerHTML = image.alt;
            }    */
            function close_span() { 
                modal = document.getElementById("myModal");
                modal.style.display = "none";
            }
            $(document).ready(function(){
                $("img").click(function(){
                    $("#myModal").css("display", "block");
                    $("#img01").attr('src',this.src);
                    window.index = $( "img" ).index( this );
                    window.right_img = $(this).parents("td").next().children().children("img");
                    $(".number").text('фото '+ (window.index+1) +' из ' + (images.length) );
                    //$(this).parents("td").next().children().children("img").css({"color": "red", "border": "2px solid red"});
                    //$(this).parentsUntil("tr").next().css({"color": "red", "border": "2px solid red"});
                    //$(this).hide();
                });
            });
            $(document).ready(function(){
                $("#b1").click(function(){
                    alert("You entered b1!");
                });
            });

            $(document).ready(function(){
                $(".right_arrow").click(function(){
                    if(window.index == images.length-1) {
                        window.index = 0;
                    }
                    else {
                        window.index ++;
                    }
                    
                    $(".modal-content").attr('src',($( "img" ).eq( window.index ).attr("src")));
                    $(".number").text('фото '+ (window.index+1) +' из ' + (images.length) );
                    window.right_img = window.right_img.parents("td").next().children().children("img");
                });
            });
            $(document).ready(function(){
                $(".left_arrow").click(function(){
                    if(window.index == 0) {
                        window.index = images.length-1;
                    }
                    else {
                        window.index --;
                    }
                    $(".modal-content").attr('src',($( "img" ).eq( window.index ).attr("src")));
                    $(".number").text('фото '+ (window.index+1) +' из ' + (images.length) );
                });
            });
            $(document).ready(function() {
                $("#dialog").dialog();
                alert(123);
            });
        </script>
Hello
Bitch
EOT;

echo $text;
?>