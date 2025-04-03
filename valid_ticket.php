
+execute();
    header("refresh:4; url=add_ticket.php");
    echo "<link rel='stylesheet' href='style.css'>";
    echo "successfully registered" . $_POST['type']. "ticket type";

} catch(PDOException $e) {
    header("refresh:4; url=add_ticket.php");
    echo "<link rel='stylesheet'  href='style.css'>";
    echo "Error: " . $e->getMessage();
    echo "Failed to add ticket type";

}

























