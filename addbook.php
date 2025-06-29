<?php
    include("dbcon.php");

    $errorinfo = "";
    $info = "";

    if (isset($_POST['btnAddBook']))
    {
        $bookid = rand(1000,9999);
        $bookname = $_POST['txtBookName'];
        $author = $_POST['txtAuthor'];
        $isbn = $_POST['txtISBN'];
        $category = $_POST['drpCategory'];
        $quantity = $_POST['txtQuantity'];
        $language = $_POST['txtLanguage'];
        $price = $_POST['txtPrice'];
        $offerprice = $_POST['txtOfferPrice'];

        $query = "insert into tabbooks (bookid, bookname, author, isbn, category, quantity, language, price, offerprice) values ('$bookid', '$bookname', '$author', '$isbn', '$category', '$quantity', '$language', '$price', '$offerprice')";

        // mysql_query($query, $con);
            $result = $conn->query($query);
            $record = $result->fetch_assoc();

        if ($result->num_rows > 0)
        {
            $info = "Book Added Successfully!";

            $file_name = $bookid . ".jpg";
            $file_tmp = $_FILES['fuImage']['tmp_name'];
      
            move_uploaded_file($file_tmp, "images/" . $file_name);
        }
    }
?>
<?php include("checkadmin.php"); ?>
<?php include("top.php"); ?>
<h3>Add Book</h3>
<form name="form1" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td width="150">Book Name</td>
            <td width="200"><input type="text" name="txtBookName" class="txt" placeholder="Enter Book Name" /></td>
        </tr>
        <tr>
            <td>Author</td>
            <td><input type="text" name="txtAuthor" class="txt" placeholder="Enter Author Name" /></td>
        </tr>
        <tr>
            <td>ISBN</td>
            <td><input type="text" name="txtISBN" class="txt" placeholder="Enter ISBN" /></td>
        </tr>
        <tr>
            <td>Category</td>
            <td>
                <select name="drpCategory" class="txt">
                    <option value="novel">Novel</option>
                    <option value="stories">Stories</option>
                    <option value="articles">Articles</option>
                    <option value="Thriller">Thriller</option>
                    <option value="magazine">Magazine</option>
                    <option value="scifi">SciFi</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Quantity</td>
            <td><input type="number" name="txtQuantity" class="txt" placeholder="Enter Quantity" /></td>
        </tr>
        <tr>
            <td>Language</td>
            <td><input type="text" name="txtLanguage" class="txt" placeholder="Enter Language" /></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="number" name="txtPrice" class="txt" placeholder="Enter Price" /></td>
        </tr>
        <tr>
            <td>Offer Price</td>
            <td><input type="number" name="txtOfferPrice" class="txt" placeholder="Enter Offer Price" /></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input type="file" name="fuImage" class="txt" placeholder="Select Book Cover Image" /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btnAddBook" class="btn" value="Add Book">
            </td>
        </tr>
    </table>
</form>
<?php include("showinfo.php"); ?>
<?php include("showerror.php"); ?>
<?php include("bottom.php"); ?>