
<!-- Address  -->
<?php
$string = $page->Address();
$string .= ", ".$page->City();
$string .= ",".$page->State();
$string .= " ".$page->Zip();

$newString = str_replace(' ', '+', $string);
$stripString = str_replace(' ', '%20', $page->Address());

$snap = $page->Country();
$uString = str_replace(' ', '%20', $snap);

?>


 <!-- Map -->
    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo $stripString ?>%2C%20<?php echo $page->City() ?>%2C%20<?php echo $page->State() ?>%2C%20<?php echo $uString ?>&key=AIzaSyDnTAHg5u8PZl-Ahh59oU3ZVmyAslMd9WA"></iframe>
        <br />
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,<?php echo $newString ?>&amp;aq=0&amp;oq=twitter&amp;sll=45.6599517,-122.5789116&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,<?php echo $newString ?>&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
        </iframe>
       <!-- https://www.google.com/maps/place/9120+NE+Vancouver+Mall+Loop,+Vancouver,+WA+98662/@45.6599517,-122.5789116,17z/data=!3m1!4b1!4m2!3m1!1s0x5495afe938cce8d3:0xf1b7084a7c2a1a10 -->
    </section>

    


 