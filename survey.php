<!DOCTYPE html>
<!--
TThis is my template : Salamullah Khan salamk17@gmail.com
*header.php contain the header (navigation bar)
*resource.php contain common imports of bootstrap and jquery libraries
*you can change these two files to add additional functionalities
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Salam Ullah Khan">
        <meta name="description" content="This is for testing the code">
        <meta name="keywords" content="template, simple template, my template, very basic template">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Title</title>
        <?php include "resource.php"; ?>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#processRequest").click(function () {
                    $.post("survey_results.php",
                            {
                                friendliness: friendliness,
                                orderProcessing: orderProcessing,
                                productKnowledge: productKnowledge,
                                qualityOfAdvice: qualityOfAdvice,
                                staffResponsiveness: staffResponsiveness,
                                complainProcessing: complainProcessing,
                                trainingQuality: trainingQuality ,
                                qualityOfProducts: qualityOfProducts,
                                overallQuality: overallQuality
                            },function (data, status) {
                                document.getElementById("survey").innerHTML=data;
                            });
                });
            });
        </script>


        <style type="text/css">
            .chbuttons{
                width:200px;
                border:1px solid black;
                text-align:left;
                background-color: transparent;
                margin-bottom: 5px;
            }

            .choice{
                padding-top:5px;
            }

            .question_text{
                font-family:arial,sans serif;
                font-size:15px;
                font-weight:bold;
                color:green;
            }

            #survey_title{
                background-color:grey;
                color:white;
                text-align:center;
            }
            #survey_subtitle{
                font-size:15px;		
            }
            h1{
                font-size: 30px;
                padding-left: 10px;
            }

            h2{
                padding-left: 10px;
            }

        </style>

        <script language="javascript">
            var friendliness = 0;
            var orderProcessing = 0, productKnowledge = 0, qualityOfAdvice = 0, staffResponsiveness = 0,
                    complainProcessing = 0, trainingQuality = 0, qualityOfProducts = 0, overallQuality = 0;
            var btnBg = "orange";
            var btnBgDefault = "transparent";

            function setDefaultState(btnId) {
                if (btnId.startsWith("f")) {
                    document.getElementById("f1").style.backgroundColor = btnBgDefault;
                    document.getElementById("f2").style.backgroundColor = btnBgDefault;
                    document.getElementById("f3").style.backgroundColor = btnBgDefault;
                    document.getElementById("f4").style.backgroundColor = btnBgDefault;
                    document.getElementById("f5").style.backgroundColor = btnBgDefault;
                    document.getElementById("f6").style.backgroundColor = btnBgDefault;
                } else if (btnId.startsWith("op")) {
                    document.getElementById("op1").style.backgroundColor = btnBgDefault;
                    document.getElementById("op2").style.backgroundColor = btnBgDefault;
                    document.getElementById("op3").style.backgroundColor = btnBgDefault;
                    document.getElementById("op4").style.backgroundColor = btnBgDefault;
                    document.getElementById("op5").style.backgroundColor = btnBgDefault;
                    document.getElementById("op6").style.backgroundColor = btnBgDefault;
                } else if (btnId.startsWith("pk")) {
                    document.getElementById("pk1").style.backgroundColor = btnBgDefault;
                    document.getElementById("pk2").style.backgroundColor = btnBgDefault;
                    document.getElementById("pk3").style.backgroundColor = btnBgDefault;
                    document.getElementById("pk4").style.backgroundColor = btnBgDefault;
                    document.getElementById("pk5").style.backgroundColor = btnBgDefault;
                    document.getElementById("pk6").style.backgroundColor = btnBgDefault;
                } else if (btnId.startsWith("op")) {
                    document.getElementById("op1").style.backgroundColor = btnBgDefault;
                    document.getElementById("op2").style.backgroundColor = btnBgDefault;
                    document.getElementById("op3").style.backgroundColor = btnBgDefault;
                    document.getElementById("op4").style.backgroundColor = btnBgDefault;
                    document.getElementById("op5").style.backgroundColor = btnBgDefault;
                    document.getElementById("op6").style.backgroundColor = btnBgDefault;
                } else if (btnId.startsWith("qa")) {
                    document.getElementById("qa1").style.backgroundColor = btnBgDefault;
                    document.getElementById("qa2").style.backgroundColor = btnBgDefault;
                    document.getElementById("qa3").style.backgroundColor = btnBgDefault;
                    document.getElementById("qa4").style.backgroundColor = btnBgDefault;
                    document.getElementById("qa5").style.backgroundColor = btnBgDefault;
                    document.getElementById("qa6").style.backgroundColor = btnBgDefault;
                } else if (btnId.startsWith("sr")) {
                    document.getElementById("sr1").style.backgroundColor = btnBgDefault;
                    document.getElementById("sr2").style.backgroundColor = btnBgDefault;
                    document.getElementById("sr3").style.backgroundColor = btnBgDefault;
                    document.getElementById("sr4").style.backgroundColor = btnBgDefault;
                    document.getElementById("sr5").style.backgroundColor = btnBgDefault;
                    document.getElementById("sr6").style.backgroundColor = btnBgDefault;
                } else if (btnId.startsWith("cp")) {
                    document.getElementById("cp1").style.backgroundColor = btnBgDefault;
                    document.getElementById("cp2").style.backgroundColor = btnBgDefault;
                    document.getElementById("cp3").style.backgroundColor = btnBgDefault;
                    document.getElementById("cp4").style.backgroundColor = btnBgDefault;
                    document.getElementById("cp5").style.backgroundColor = btnBgDefault;
                    document.getElementById("cp6").style.backgroundColor = btnBgDefault;
                } else if (btnId.startsWith("tq")) {
                    document.getElementById("tq1").style.backgroundColor = btnBgDefault;
                    document.getElementById("tq2").style.backgroundColor = btnBgDefault;
                    document.getElementById("tq3").style.backgroundColor = btnBgDefault;
                    document.getElementById("tq4").style.backgroundColor = btnBgDefault;
                    document.getElementById("tq5").style.backgroundColor = btnBgDefault;
                    document.getElementById("tq6").style.backgroundColor = btnBgDefault;
                } else if (btnId.startsWith("qp")) {
                    document.getElementById("qp1").style.backgroundColor = btnBgDefault;
                    document.getElementById("qp2").style.backgroundColor = btnBgDefault;
                    document.getElementById("qp3").style.backgroundColor = btnBgDefault;
                    document.getElementById("qp4").style.backgroundColor = btnBgDefault;
                    document.getElementById("qp5").style.backgroundColor = btnBgDefault;
                    document.getElementById("qp6").style.backgroundColor = btnBgDefault;
                } else if (btnId.startsWith("oq")) {
                    document.getElementById("oq1").style.backgroundColor = btnBgDefault;
                    document.getElementById("oq2").style.backgroundColor = btnBgDefault;
                    document.getElementById("oq3").style.backgroundColor = btnBgDefault;
                    document.getElementById("oq4").style.backgroundColor = btnBgDefault;
                    document.getElementById("oq5").style.backgroundColor = btnBgDefault;
                    document.getElementById("oq6").style.backgroundColor = btnBgDefault;
                }
            }

            function f_friendliness(sentiment, btnId) {
                friendliness = sentiment;
                setDefaultState(btnId);
                document.getElementById(btnId).style.backgroundColor = btnBg;
                printResults();
            }
            function f_orderProcessing(sentiment, btnId) {
                orderProcessing = sentiment;
                setDefaultState(btnId);
                document.getElementById(btnId).style.backgroundColor = btnBg;
                printResults();
            }
            function f_productKnowledge(sentiment, btnId) {
                productKnowledge = sentiment;
                setDefaultState(btnId);
                document.getElementById(btnId).style.backgroundColor = btnBg;

                printResults();
            }
            function f_qualityOfAdvice(sentiment, btnId) {
                qualityOfAdvice = sentiment;
                setDefaultState(btnId);
                document.getElementById(btnId).style.backgroundColor = btnBg;

                printResults();
            }
            function f_staffResponsiveness(sentiment, btnId) {
                staffResponsiveness = sentiment;
                setDefaultState(btnId);
                document.getElementById(btnId).style.backgroundColor = btnBg;

                printResults();
            }
            function f_complainProcessing(sentiment, btnId) {
                complainProcessing = sentiment;
                setDefaultState(btnId);
                document.getElementById(btnId).style.backgroundColor = btnBg;

                printResults();
            }
            function f_trainingQuality(sentiment, btnId) {
                trainingQuality = sentiment;
                setDefaultState(btnId);
                document.getElementById(btnId).style.backgroundColor = btnBg;

                printResults();
            }
            function f_qualityOfProducts(sentiment, btnId) {
                qualityOfProducts = sentiment;
                setDefaultState(btnId);
                document.getElementById(btnId).style.backgroundColor = btnBg;

                printResults();
            }
            function f_overallQuality(sentiment, btnId) {
                overallQuality = sentiment;
                setDefaultState(btnId);
                document.getElementById(btnId).style.backgroundColor = btnBg;

                printResults();
            }


            function printResults() {
                var result = "Results of the survey<br>";
                result += "Friendliness: " + describeResult(friendliness) + "<br>";
                result += "Order Processing: " + describeResult(orderProcessing) + "<br>";
                result += "Product Knowledge: " + describeResult(productKnowledge) + "<br>";
                result += "Quality of Advice: " + describeResult(qualityOfAdvice) + "<br>";
                result += "Staff Responsiveness: " + describeResult(staffResponsiveness) + "<br>";
                result += "Complain Processing: " + describeResult(complainProcessing) + "<br>";
                result += "Training Quality: " + describeResult(trainingQuality) + "<br>";
                result += "Quality of Products: " + describeResult(qualityOfProducts) + "<br>";
                result += "Overall Quality: " + describeResult(overallQuality) + "<br>";

                document.getElementById("sentiment").innerHTML = result;

            }
            function describeResult(sentiment) {
                var description = "Not Answered";
                if (sentiment === 0) {
                    description = "Not Answered";
                } else if (sentiment === 1) {
                    description = "Very Satisfied";
                } else if (sentiment === 2) {
                    description = "Not Satisfied";
                } else if (sentiment === 3) {
                    description = "Satisfied";
                } else if (sentiment === 4) {
                    description = "Not at all satisfied";
                } else if (sentiment === 5) {
                    description = "Neutral";
                } else if (sentiment === 6) {
                    description = "Not Applicable";
                }

                return description;
            }
        </script>


    </head>
    <body>
        <?php include "header.php"; ?>
	<div id="survey">
        <div class="container">
            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm">
                    <h1 id="survey_title">Customer Service Survey</h1>
                    <h2 id="survey_subtitle">Please rate how satisifed you are with our customer service</h2>
                </div>

                <div class="container">
                    <p class="question_text">Staff friendliness on phone</p>
                </div>
                <div class="col-sm"></div>
            </div><!--end of row-->
        </div>


        <div class="container">
            <div class="row choice">
                <div class="col-sm-3">
                    <button id="f1" class="btn btn-outline-primary chbuttons" onclick="f_friendliness(1, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_very_satisfied</i>
                        </span>
                        &nbsp;Very Satisfied
                    </button><br>
                </div>
                <div class="col-sm-3">
                    <button id="f2" class="btn btn-outline-primary chbuttons" onclick="f_friendliness(2, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_dissatisfied</i>
                        </span>&nbsp;Not satisfied
                </div>
            </div><!--end of #choice_q1_row2-->

            <div class="row choice">
                <div class="col-sm-3">
                    <button id="f3" class="btn btn-outline-primary chbuttons" onclick="f_friendliness(3, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_satisfied</i>
                        </span>&nbsp;Satisfied
                </div>
                <div class="col-sm-3">
                    <button id="f4" class="btn btn-outline-primary btn-block chbuttons" onclick="f_friendliness(4, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_very_dissatisfied</i>
                        </span>
                        Not at all satisfied
                </div>
            </div><!--end of #choice_q1_row2-->

            <div class="row choice">
                <div class="col-sm-3">
                    <button id="f5" class="btn btn-outline-primary chbuttons" onclick="f_friendliness(5, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_neutral</i>
                        </span>
                        &nbsp; Neutral
                </div>
                <div class="col-sm-3">
                    <button id="f6" class="btn btn-outline-primary chbuttons" onclick="f_friendliness(6, this.id);">
                        <span class="badge">
                            <i class="material-icons">face</i>
                        </span>
                        Not applicable
                </div>
            </div><!--end of #choice_q1_row2-->
        </div><!--end of #choices_q1-->




        <!--start new question: Staff Attitude on Phone !-->
        <div class="container">
            <p class="question_text"><br>Order Processing</p>
            <div class="col-sm"></div>
        </div><!--end of row-->

        <div class="container">
            <div class="row choice">
                <div class="col-sm-3">
                    <button id="op1" class="btn btn-outline-primary chbuttons" onclick="f_orderProcessing(1, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_very_satisfied</i>
                        </span>
                        &nbsp;Very Satisfied
                </div>
                <div class="col-sm-3">
                    <button  id="op2" class="btn btn-outline-primary chbuttons" onclick="f_orderProcessing(2, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_dissatisfied</i>
                        </span>&nbsp;Not satisfied
                </div>
            </div><!--end of #choice_q1_row2-->

            <div class="row choice">
                <div class="col-sm-3">
                    <button  id="op3" class="btn btn-outline-primary chbuttons" onclick="f_orderProcessing(3, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_satisfied</i>
                        </span>&nbsp;Satisfied
                </div>
                <div class="col-sm-3">
                    <button  id="op4" class="btn btn-outline-primary btn-block chbuttons" onclick="f_orderProcessing(4, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_very_dissatisfied</i>
                        </span>
                        Not at all satisfied
                </div>
            </div><!--end of #choice_q1_row2-->

            <div class="row choice">
                <div class="col-sm-3">
                    <button  id="op5" class="btn btn-outline-primary chbuttons" onclick="f_orderProcessing(5, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_neutral</i>
                        </span>
                        &nbsp;Neutral
                </div>
                <div class="col-sm-3">
                    <button  id="op6" class="btn btn-outline-primary chbuttons" onclick="f_orderProcessing(6, this.id);">
                        <span class="badge">
                            <i class="material-icons">face</i>
                        </span>
                        Not applicable
                </div>
            </div><!--end of #choice_q1_row2-->
        </div><!--end of #choices_q1-->


        <!--start new question: Staff Attitude on Phone !-->
        <div class="container">
            <p class="question_text"><br>Staff’s product knowledge</p>
            <div class="col-sm"></div>
        </div><!--end of row-->

        <div class="container">
            <div class="row choice">
                <div class="col-sm-3">
                    <button id="pk1" class="btn btn-outline-primary chbuttons" onclick="f_productKnowledge(1, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_very_satisfied</i>
                        </span>
                        &nbsp;Very Satisfied
                </div>
                <div class="col-sm-3">
                    <button id="pk2"  class="btn btn-outline-primary chbuttons" onclick="f_productKnowledge(2, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_dissatisfied</i>
                        </span>&nbsp;Not satisfied
                </div>
            </div><!--end of #choice_q1_row2-->

            <div class="row choice">
                <div class="col-sm-3">
                    <button  id="pk3" class="btn btn-outline-primary chbuttons" onclick="f_productKnowledge(3, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_satisfied</i>
                        </span>&nbsp;Satisfied
                </div>
                <div class="col-sm-3">
                    <button  id="pk4" class="btn btn-outline-primary btn-block chbuttons" onclick="f_productKnowledge(4, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_very_dissatisfied</i>
                        </span>
                        Not at all satisfied
                </div>
            </div><!--end of #choice_q1_row2-->

            <div class="row choice">
                <div class="col-sm-3">
                    <button  id="pk5" class="btn btn-outline-primary chbuttons" onclick="f_productKnowledge(5, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_neutral</i>
                        </span>
                        &nbsp;Neutral
                </div>
                <div class="col-sm-3">
                    <button  id="pk6" class="btn btn-outline-primary chbuttons" onclick="f_productKnowledge(6, this.id);">
                        <span class="badge">
                            <i class="material-icons">face</i>
                        </span>
                        Not applicable
                </div>
            </div><!--end of #choice_q1_row2-->
        </div><!--end of #choices_q1-->


        <!--start new question: Quality of Advice !-->
        <div class="container">
            <p class="question_text"><br>Quality of specialist advice provided</p>
            <div class="col-sm"></div>
        </div><!--end of row-->

        <div class="container">
            <div class="row choice">
                <div class="col-sm-3">
                    <button id="qa1" class="btn btn-outline-primary chbuttons" onclick="f_qualityOfAdvice(1, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_very_satisfied</i>
                        </span>
                        &nbsp;Very Satisfied
                </div>
                <div class="col-sm-3">
                    <button id="qa2" class="btn btn-outline-primary chbuttons" onclick="f_qualityOfAdvice(2, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_dissatisfied</i>
                        </span>&nbsp;Not satisfied
                </div>
            </div><!--end of #choice_q1_row2-->

            <div class="row choice">
                <div class="col-sm-3">
                    <button id="qa3" class="btn btn-outline-primary chbuttons" onclick="f_qualityOfAdvice(3, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_satisfied</i>
                        </span>&nbsp;Satisfied
                </div>
                <div class="col-sm-3">
                    <button id="qa4" class="btn btn-outline-primary btn-block chbuttons" onclick="f_qualityOfAdvice(4, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_very_dissatisfied</i>
                        </span>
                        Not at all satisfied
                </div>
            </div><!--end of #choice_q1_row2-->

            <div class="row choice">
                <div class="col-sm-3">
                    <button id="qa5" class="btn btn-outline-primary chbuttons" onclick="f_qualityOfAdvice(5, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_neutral</i>
                        </span>
                        &nbsp;Neutral
                </div>
                <div class="col-sm-3">
                    <button id="qa6" class="btn btn-outline-primary chbuttons" onclick="f_qualityOfAdvice(6, this.id);">
                        <span class="badge">
                            <i class="material-icons">face</i>
                        </span>
                        Not applicable
                </div>
            </div><!--end of #choice_q1_row2-->
        </div><!--end of #choices_q1-->


        <!--start new question: Staff’s responsiveness to your enquiry !-->
        <div class="container">
            <p class="question_text"><br>Staff’s responsiveness to your enquiry</p>
            <div class="col-sm"></div>
        </div><!--end of row-->

        <div class="container">
            <div class="row choice">
                <div class="col-sm-3">
                    <button id="sr1" class="btn btn-outline-primary chbuttons" onclick="f_staffResponsiveness(1, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_very_satisfied</i>
                        </span>
                        &nbsp;Very Satisfied
                </div>
                <div class="col-sm-3">
                    <button id="sr2"  class="btn btn-outline-primary chbuttons" onclick="f_staffResponsiveness(2, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_dissatisfied</i>
                        </span>&nbsp;Not satisfied
                </div>
            </div><!--end of #choice_q1_row2-->

            <div class="row choice">
                <div class="col-sm-3">
                    <button  id="sr3" class="btn btn-outline-primary chbuttons" onclick="f_staffResponsiveness(3, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_satisfied</i>
                        </span>&nbsp;Satisfied
                </div>
                <div class="col-sm-3">
                    <button  id="sr4" class="btn btn-outline-primary btn-block chbuttons" onclick="f_staffResponsiveness(4, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_very_dissatisfied</i>
                        </span>
                        Not at all satisfied
                </div>
            </div><!--end of #choice_q1_row2-->

            <div class="row choice">
                <div class="col-sm-3">
                    <button  id="sr5" class="btn btn-outline-primary chbuttons" onclick="f_staffResponsiveness(5, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_neutral</i>
                        </span>
                        &nbsp;Neutral
                </div>
                <div class="col-sm-3">
                    <button  id="sr6" class="btn btn-outline-primary chbuttons" onclick="f_staffResponsiveness(6, this.id);">
                        <span class="badge">
                            <i class="material-icons">face</i>
                        </span>
                        Not applicable
                </div>
            </div><!--end of #choice_q1_row2-->
        </div><!--end of #choices_q1-->



        <!--start new question: Processing your complaint !-->
        <div class="container">
            <p class="question_text"><br>Processing your complaint</p>
            <div class="col-sm"></div>
        </div><!--end of row-->

        <div class="container">
            <div class="row choice">
                <div class="col-sm-3">
                    <button id="cp1" class="btn btn-outline-primary chbuttons" onclick="f_complainProcessing(1, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_very_satisfied</i>
                        </span>
                        &nbsp;Very Satisfied
                </div>
                <div class="col-sm-3">
                    <button id="cp2" class="btn btn-outline-primary chbuttons" onclick="f_complainProcessing(2, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_dissatisfied</i>
                        </span>&nbsp;Not satisfied
                </div>
            </div><!--end of #choice_q1_row2-->

            <div class="row choice">
                <div class="col-sm-3">
                    <button  id="cp3" class="btn btn-outline-primary chbuttons" onclick="f_complainProcessing(3, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_satisfied</i>
                        </span>&nbsp;Satisfied
                </div>
                <div class="col-sm-3">
                    <button  id="cp4" class="btn btn-outline-primary btn-block chbuttons" onclick="f_complainProcessing(4, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_very_dissatisfied</i>
                        </span>
                        Not at all satisfied
                </div>
            </div><!--end of #choice_q1_row2-->

            <div class="row choice">
                <div class="col-sm-3">
                    <button  id="cp5" class="btn btn-outline-primary chbuttons" onclick="f_complainProcessing(5, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_neutral</i>
                        </span>
                        &nbsp;Neutral
                </div>
                <div class="col-sm-3">
                    <button  id="cp6" class="btn btn-outline-primary chbuttons" onclick="f_complainProcessing(6, this.id);">
                        <span class="badge">
                            <i class="material-icons">face</i>
                        </span>
                        Not applicable
                </div>
            </div><!--end of #choice_q1_row2-->
        </div><!--end of #choices_q1-->


        <!--start new question: Quality of the product training provided!-->
        <div class="container">
            <p class="question_text"><br>Quality of the product training provided</p>
            <div class="col-sm"></div>
        </div><!--end of row-->

        <div class="container">
            <div class="row choice">
                <div class="col-sm-3">
                    <button id="tq1" class="btn btn-outline-primary chbuttons" onclick="f_trainingQuality(1, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_very_satisfied</i>
                        </span>
                        &nbsp;Very Satisfied
                </div>
                <div class="col-sm-3">
                    <button id="tq2"  class="btn btn-outline-primary chbuttons" onclick="f_trainingQuality(2, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_dissatisfied</i>
                        </span>&nbsp;Not satisfied
                </div>
            </div><!--end of #choice_q1_row2-->

            <div class="row choice">
                <div class="col-sm-3">
                    <button  id="tq3" class="btn btn-outline-primary chbuttons" onclick="f_trainingQuality(3, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_satisfied</i>
                        </span>&nbsp;Satisfied
                </div>
                <div class="col-sm-3">
                    <button  id="tq4" class="btn btn-outline-primary btn-block chbuttons" onclick="f_trainingQuality(4, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_very_dissatisfied</i>
                        </span>
                        Not at all satisfied
                </div>
            </div><!--end of #choice_q1_row2-->

            <div class="row choice">
                <div class="col-sm-3">
                    <button  id="tq5" class="btn btn-outline-primary chbuttons" onclick="f_trainingQuality(5, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_neutral</i>
                        </span>
                        &nbsp;Neutral
                </div>
                <div class="col-sm-3">
                    <button  id="tq6" class="btn btn-outline-primary chbuttons" onclick="f_trainingQuality(6, this.id);">
                        <span class="badge">
                            <i class="material-icons">face</i>
                        </span>
                        Not applicable
                </div>
            </div><!--end of #choice_q1_row2-->
        </div><!--end of #choices_q1-->



        <!--start new question: Quality of the ordered products!-->
        <div class="container">
            <p class="question_text"><br>Quality of the ordered products</p>
            <div class="col-sm"></div>
        </div><!--end of row-->

        <div class="container">
            <div class="row choice">
                <div class="col-sm-3">
                    <button id="qp1" class="btn btn-outline-primary chbuttons" onclick="f_qualityOfProducts(1, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_very_satisfied</i>
                        </span>
                        &nbsp;Very Satisfied
                </div>
                <div class="col-sm-3">
                    <button id="qp2"  class="btn btn-outline-primary chbuttons" onclick="f_qualityOfProducts(2, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_dissatisfied</i>
                        </span>&nbsp;Not satisfied
                </div>
            </div><!--end of #choice_q1_row2-->

            <div class="row choice">
                <div class="col-sm-3">
                    <button  id="qp3" class="btn btn-outline-primary chbuttons" onclick="f_qualityOfProducts(3, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_satisfied</i>
                        </span>&nbsp;Satisfied
                </div>
                <div class="col-sm-3">
                    <button  id="qp4" class="btn btn-outline-primary btn-block chbuttons" onclick="f_qualityOfProducts(4, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_very_dissatisfied</i>
                        </span>
                        Not at all satisfied
                </div>
            </div><!--end of #choice_q1_row2-->

            <div class="row choice">
                <div class="col-sm-3">
                    <button  id="qp5" class="btn btn-outline-primary chbuttons" onclick="f_qualityOfProducts(5, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_neutral</i>
                        </span>
                        &nbsp;Neutral
                </div>
                <div class="col-sm-3">
                    <button  id="qp6" class="btn btn-outline-primary chbuttons" onclick="f_qualityOfProducts(6, this.id);">
                        <span class="badge">
                            <i class="material-icons">face</i>
                        </span>
                        Not applicable
                </div>
            </div><!--end of #choice_q1_row2-->
        </div><!--end of #choices_q1-->



        <!--start new question: Overall quality of the services you received!-->
        <div class="container">
            <p class="question_text"><br>Overall quality of the services you received</p>
            <div class="col-sm"></div>
        </div><!--end of row-->

        <div class="container">
            <div class="row choice">
                <div class="col-sm-3">
                    <button id="oq1" class="btn btn-outline-primary chbuttons" onclick="f_overallQuality(1, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_very_satisfied</i>
                        </span>
                        &nbsp;Very Satisfied
                </div>
                <div class="col-sm-3">
                    <button id="oq2"  class="btn btn-outline-primary chbuttons" onclick="f_overallQuality(2, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_dissatisfied</i>
                        </span>&nbsp;Not satisfied
                </div>
            </div><!--end of #choice_q1_row2-->

            <div class="row choice">
                <div class="col-sm-3">
                    <button  id="oq3" class="btn btn-outline-primary chbuttons" onclick="f_overallQuality(3, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_satisfied</i>
                        </span>&nbsp;Satisfied
                </div>
                <div class="col-sm-3">
                    <button  id="oq4" class="btn btn-outline-primary btn-block chbuttons" onclick="f_overallQuality(4, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_very_dissatisfied</i>
                        </span>
                        Not at all satisfied
                </div>
            </div><!--end of #choice_q1_row2-->

            <div class="row choice">
                <div class="col-sm-3">
                    <button  id="oq5" class="btn btn-outline-primary chbuttons" onclick="f_overallQuality(5, this.id);">
                        <span class="badge">
                            <i class="material-icons">sentiment_neutral</i>
                        </span>
                        &nbsp;Neutral
                </div>
                <div class="col-sm-3">
                    <button  id="oq6" class="btn btn-outline-primary chbuttons" onclick="f_overallQuality(6, this.id);">
                        <span class="badge">
                            <i class="material-icons">face</i>
                        </span>
                        Not applicable
                </div>
            </div><!--end of #choice_q1_row2-->
        </div><!--end of #choices_q1---->    




        <div id="sentiment" class="container">

        </div>

        <div class="container">
            <button id="processRequest" class="btn btn-outline-primary">Post Data</button>
            <br><br><br>
        </div>
	</div>    <!--end of survey-->

    </body>
</html>
