<html>
    <head>
        <title>Samples Interstyle</title>

    </head>
    <body>
        <form>
            <label>Type</label>
            <select id="type">
                <option>Folder</option>
                <option>Piece</option>
                <option>Mesh</option>
                <option>Wallet</option>
                <option>AGS</option>
            </select>
            <br>
            <?php 
                include("module_sample.php");
            ?>
            <input type="submit" value="Add Sample">

        </form>

    </body>