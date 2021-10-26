<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <script defer src="script.js"></script>
</head>
<link rel="stylesheet" href="style.css">
<body bgcolor="#ccc">
    <img src="https://revolusim.com/wp-content/uploads/2016/01/logo-javascript.png">
    <fieldset>
    <div id="error"></div>
    <form id="form" action="#" method="GET">
        <div>
            <fieldset>
            <label for="name">Name: </label>
            <input id="name" name="name" type="text" required>
        </fieldset>
        </div>

        <div>
            <fieldset>
            <label for="email">Email: </label>
            <input id="email" name="email" type="email" required>
            <label for="password">Password: </label>
            <input id="password" name="password" type="password" required>
        </fieldset>
        </div>
        
        <div>
            <fieldset>
        
            <label for="phone">Phone Number: </label>
            <input id="phone" name="phone" type="number" required>
    
            <label for="birthdaytime">DOB & Time: </label>
            <input type="datetime-local" id="birthdaytime" name="birthdaytime" required>
        </fieldset>
        </div>

        <div>
            <fieldset>
            <legend>Gender</legend> 
            <input type="radio" id="male" name="gender" value="male">
              <label for="male">Male</label>
              <input type="radio" id="female" name="gender" value="female">
              <label for="female">Female</label>
              <input type="radio" id="other" name="other" value="other">
              <label for="other">Other</label>
        </fieldset>
        </div>

        <div>
            <fieldset>
                <legend>Music Genres you like</legend>            
                <label><input type="checkbox" name="genres" value="rock"> Rock</label>
                <label><input type="checkbox" name="genres" value="pop"> Pop music</label>
                <label><input type="checkbox" name="genres" value="jazz"> Jazz</label>
        </fieldset>
        </div>

        <div>
            <fieldset>
            <label for="course">Course</label>

            <select id="course">
            <option value="msc">MSc(CS)</option>
            <option value="mca">MCA)</option>
            <option value="mtech">M.Tech</option>
            </select>
        </fieldset>
        </div>

        <div>
            <fieldset>
            <label for="feedback">Feedback:  </label>
            <textarea id="feedback" rows="2" cols="50" name="feedback" form="form" required></textarea>
        </div>
        <button type="submit" id="submit" style="background-color:red; height:40px; width:80px; color: white;">Submit</button>
    </fieldset>
    </form>
    
</body>
</html>
