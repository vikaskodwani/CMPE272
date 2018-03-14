<section class="main-section-contact" id="contacts">
            <div class="container">
                <div class="animated"><h3>
                <?php 
                $contacts = fopen("txt/contacts.txt", "r");
                while(($line=fgets($contacts))!==false){
                    echo $line;
                    echo "<br/>";
                }
                fclose($contacts)
                ?>
            </h3>
            </div>
            </div>
</section>