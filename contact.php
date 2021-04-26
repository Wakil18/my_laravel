<?php

  include_once 'template/head.php';
  include_once 'template/header.php';       //        <!-- Top Header_Area -->
  include_once 'template/nav-bar.php';     //	   <!-- Header_Area -->
 // include_once 'template/slide-bar.php';  //    <!-- Slider area -->

  

?>

<?php  if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                } 
?>

<!-- Banner area -->
<section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>Contact Us</h2>
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li><a href="#" class="active">Contact Us</a></li>
    </ol>
</section>
<!-- End Banner area -->

<!-- Map -->
<div class="contact_map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d233533.81021805512!2d90.44069804466251!3d23.85534870087626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1482565625375"></iframe>
</div>
<!-- End Map -->

<!-- All contact Info -->
<section class="all_contact_info">
    <div class="container">
        <div class="row contact_row">
            <div class="col-sm-6 contact_info">
                <h2>Contact Info</h2>
                <p>The Office of Air Pollution ensures drinking air is safe to breathe, and restores and maintains
                    oceans,
                    watersheds, and their aquatic ecosystems to protect human health, support economic and recreational
                    activities, and provide healthy habitat for fish, plants and wildlife.</p>
                <p>If you’re interested in learning about more than the Council’s programmatic work, you’ve come to the
                    right place! Find out all the ways you can contact us, the members of our staff and board, and more.
                    As always, if you have questions please email them to members@cleanair.org.</p>
                <div class="location">
                    <div class="location_laft">
                        <a class="f_location" href="#">location</a>
                        <a href="#">phone</a>
                        <a href="#">fax</a>
                        <a href="#">email</a>
                    </div>
                    <div class="address">
                        <a href="#"> North Street, Dons Circle <br> Florida </a>
                        <a href="#">+880 142 555 4747</a>
                        <a href="#">(626) 935-3026</a>
                        <a href="#">airpollution@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 contact_info send_message">
                <h2>Send Us a Message</h2>
                <form class="form-inline contact_box" @submit.prevent="post" @keydown="form.onKeydown($event)">
                    <input type="text" name="faq_mail" id="email" class="form-control input_box"
                        placeholder="Your Email">
                    <textarea class="form-control input_box" id="faq" name="faq_question"
                        placeholder="Message"></textarea>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Send
                        Message</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Frequently Asked Questions</h4>
                </div>
                <div class="modal-body">
                    <p>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="#">What is air pollution?</a>
                                <p>
                                    <a href="#">
                                        <i class="fa fa-telegram" aria-hidden="true"></i>
                                    </a>
                                    There are many different types of air pollutants from a wide range of sources. The
                                    pollutants that most affect health are the gases and particles that contribute to
                                    cardiovascular and respiratory disease. These pollutants are often lumped together
                                    under the term “smog”.</p>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="#">What is the scale for the Air Quality Health Index?</a>
                                <p>
                                    <a href="#">
                                        <i class="fa fa-telegram" aria-hidden="true"></i>
                                    </a>
                                    The Air Quality Health Index is measured on a scale ranging from 1 to 10+: <br>

                                    1-3 = ‘Low’ health risk<br>
                                    4-6 = ‘Moderate’ health risk<br>
                                    7-10 = ‘High’ health risk<br>
                                    Above 10 = ‘Very high’ health risk
                                </p>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="#">Can I work with Your Company?</a>
                                <p>
                                    <a href="#">
                                        <i class="fa fa-telegram" aria-hidden="true"></i>
                                    </a>
                                    Yes, If you wanna join then just mail us and we will let you know about our next
                                    program where you can just hop in. U can also stay with us by donating us and
                                    helping us to make it a clear world with minimum air pollution.
                                </p>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="#">What are the health consequences of air pollution?</a>
                                <p>
                                    <a href="#">
                                        <i class="fa fa-telegram" aria-hidden="true"></i>
                                    </a>
                                    Air pollution increases the risk of respiratory and heart disease in the population.
                                    Both short and
                                    long term exposure to air pollutants have been associated to health impacts. More
                                    severe impacts
                                    affect people who are already ill. Children, the elderly and poor people are more
                                    susceptible.
                                </p>
                            </div>
                        </div>
                        
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="#">What effect of air pollution causes millions of people to die each year?</a>
                                <p>
                                    <a href="#">
                                        <i class="fa fa-telegram" aria-hidden="true"></i>
                                    </a>
                                    Respiratory infections, lung cancer, and heart disease.
                                </p>
                            </div>
                        </div>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="got_it">Yes, got my
                        answer</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="submit">No, i want to submit
                        my question</button>
                </div>
            </div>

        </div>
    </div>

</section>
<!-- End All contact Info -->

<?php
    include_once 'template/footer.php';  //   <!-- Footer Area -->
?>

<script>
    $(document).ready(function () {
        $('#submit').click(function () {
            var email = $('#email').val();
            var faq = $('#faq').val();
            $.ajax({
                method: "POST",
                url: "faq_submit.php",
                data: {
                    email: email,
                    faq: faq
                }
            }).done(function (msg) {
                if (msg == 1) {
                    alert('Please enter your Email and Password');
                } else if (msg == 2) {
                    alert('Please Enter a Valid Email'); //FAQ
                } else if (msg == 3) {
                    alert('Your question submitted Successfully');
                    location.reload();
                } else if (msg == 4) {
                    alert('Failed to submit Your question');
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('#got_it').click(function () {
            location.reload();
        });
    });
</script>