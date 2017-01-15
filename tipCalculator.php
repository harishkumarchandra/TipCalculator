<html>
<body>
<h1>Tip Calculator</h1><br/>
<form action="" method="GET">
    Bill subtotal: $ <input type="text" name="bill" /><br /><br/>
    Number of People:  <input type="text" name="people" /><br /><br/>
    Tip percentage:<br />
    <input type="radio" name="tipP" value="10">10%
    <input type="radio" name="tipP" value="15">15%
    <input type="radio" name="tipP" value="20">20%
    <input type="radio" name="custom">Custom
    <input type="text" name="customTip"/><br/><br/>
    <input type="submit" name="submit">
</form>
<?PHP
$bill =  (isset($_GET['bill'])&& is_numeric($_GET['bill'])&& $_GET['bill']>0) ? $_GET['bill']:" ";
$people =  (isset($_GET['people'])&& is_numeric($_GET['people'])&& $_GET['people']>0) ? $_GET['people']:"1";
$tipP = isset($_GET['tipP']) ? $_GET['tipP']:" ";
if (isset($_GET['customTip'])&& isset($_GET['custom'])){
    $tipP = $_GET['customTip'];
}
$tip = $bill * $tipP/100;
$total = ($bill * $tipP/100) + $bill;
$split = $total/$people;
echo "Tip: $".$tip."<br/><br/>";
echo "Total: $".$total."<br/><br/>";
echo "Split: $".$split." per each"
?>
</body>
</html>