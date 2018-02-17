<html>
<body>
<?php 
$friendliness = $_POST['friendliness'];
$orderProcessing = $_POST['orderProcessing'];
$productKnowledge = $_POST['productKnowledge'];
$qualityOfAdvice = $_POST['qualityOfAdvice'];
$staffResponsiveness = $_POST['staffResponsiveness'];
$complainProcessing = $_POST['complainProcessing'];
$trainingQuality = $_POST['trainingQuality'];
$qualityOfProducts = $_POST['qualityOfProducts'];
$overallQuality = $_POST['overallQuality'];

function describeResult($sentiment){
	$val = $_POST[$sentiment];
	for($i=0; $i<=6; $i++){
		if($i==$val){
			echo "<TD><i class='material-icons'>check_circle</i></TD>";
		}else{
			echo "<TD><i class='material-icons'>clear</i></TD>";
		}
	}
}

?>
<table class="table table-striped table-inverse">
  <thead>
    <tr>
      <th>Service</th>
      <th>Not at all satisfied</th>
      <th>Not satisfied</th>
      <th>Neutral</th>
      <th>satisfied</th>
      <th>Very satisfied</th>
      <th>Not answered</th>
      <th>Not applicable</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Friendliness</th>
      	<?php describeResult("friendliness");?>
    </tr>
    <tr>
      <th scope="row">Order Processing</th>
	<?php describeResult("orderProcessing");?>
    </tr>
    <tr>
      <th scope="row">Product Knowledge</th>
	<?php describeResult("productKnowledge");?>
    </tr>
    <tr>
      <th scope="row">Quality of advice</th>
	<?php describeResult("qualityOfAdvice");?>
    </tr>
    <tr>
      <th scope="row">Responsiveness</th>
	<?php describeResult("staffResponsiveness");?>
    </tr>
    <tr>
      <th scope="row">Complain processing</th>
	<?php describeResult("complainProcessing");?>
    </tr>
    <tr>
      <th scope="row">Training quality</th>
	<?php describeResult("trainingQuality");?>
    </tr>
    <tr>
      <th scope="row">Product quality</th>
	<?php describeResult("productQuality");?>
    </tr>
    <tr>
      <th scope="row">Overall quality</th>
	<?php describeResult("overallQuality");?>
    </tr>
  </tbody>
</table>

</body>
</html>
