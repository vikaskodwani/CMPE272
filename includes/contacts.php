<section class="main-section-contact" id="contacts">
            <br>
            <br>
            <div>
                <?php 
                $contacts = fopen("txt/contacts.txt", "r");
                while(($line=fgets($contacts))!==false){
                    echo $line;
                    echo "<br/>";
                }
                fclose($contacts)
                ?>
            </div>
</section>