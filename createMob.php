<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/styleCreateMob.css"/>
        <title>Style Design SRL</title>
    <link rel="icon" type="image/x-icon" href="/images/icon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<form class="creatie" action="formular4.php" method="post">
        <label for="nume" style="text-align: left; margin-left: 10px;"><b>Nume </b></label>
        <input type="text" placeholder="" name="nume" required>
        <label for="prenume" style="text-align: left; margin-left: 10px;"><b>Prenume</b></label>
        <input type="text" placeholder="" name="prenume" required>
        <label for="email" style="text-align: left; margin-left: 10px;"><b>Email</b></label>
        <input type="email" placeholder="ion.popescu@gmail.com" name="email" required>
        <label for="telefon" style="text-align: left; margin-left: 10px;"><b>Numar de telefon</b></label>
        <input type="number" placeholder="07xx-xxx-xxx" name="telefon" required id="phone" onkeyup="CheckPhone(this);">
        <br>

        <label style="margin-left: 10px;font-size: 18px; font-family: Georgia, 'Times New Roman', Times, serif;" for="camera"><b>Alege camera </b></label>
        <select style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 18px;" name="camera" id="camera">
        <?php

            $sqlRooms = "SELECT id, title FROM pages WHERE is_in_form = 1";
            $result = $conn->query($sqlRooms);
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row["id"] . '">' . $row['title'] . '</option>';
            }

        ?>
        </select>
        <br /><br />
        <label style="margin-left: 10px;font-size: 18px; font-family: Georgia, 'Times New Roman', Times, serif;" for="furniture"><b>Alege tipul de mobila</b></label>
        <select style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 18px;" name="furniture" id="furniture">
        <?php 
            $sqlFurniture = "SELECT id, `name` FROM room_furniture";
            $result = $conn->query($sqlFurniture);
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row["id"] . '">' . $row['name'] . '</option>';
            }
        ?>
        </select>
        <br /><br />
        <label style="margin-left: 10px;font-size: 18px; font-family: Georgia, 'Times New Roman', Times, serif;" for="material"><b>Alege tipul de material</b></label>
        <select style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 18px;" name="material" id="material">
        <?php 
            $sqlMaterial = "SELECT id, `name` FROM furniture_materials";
            $result = $conn->query($sqlMaterial);
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row["id"] . '">' . $row['name'] . '</option>';
            }
        ?>
        </select>
        <br /><br />
        <label style="margin-left: 10px;font-size: 18px; font-family: Georgia, 'Times New Roman', Times, serif;" for="color"><b>Alege culoarea</b></label>
        <select style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 18px;" name="color" id="color">
        <?php 

            $sqlColors = "SELECT id, `name` FROM material_colors ORDER BY `name`";
            $result = $conn->query($sqlColors);
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row["id"] . '">' . $row['name'] . '</option>';
            }
        ?>
        </select>
        
        <p style="margin-left: 10px;font-family: Georgia, 'Times New Roman', Times, serif;font-size: 18px;"><b>Secțiunile marcate cu * sunt opționale.</b></p>
        <button style="margin-left: 250px;font-family: Georgia, 'Times New Roman', Times, serif;font-size: 18px; margin-bottom: 10px;" type="submit">Trimite formular!</button>
    </form>
      <script type="text/javascript">
        function CheckPhone(el) {
            console.log(el.value);
        }
        

    </script>

</body>
</html>