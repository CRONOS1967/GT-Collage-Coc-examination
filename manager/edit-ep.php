<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style2.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <?php include 'sidebar.php'; ?>
    <div class="card-form">
        <div class="big-card" style="margin-left:1rem;">
            <h2 class="section-title" style="margin-top:3rem;">Edit Exam Provider
            </h2><br><br>
            <div class="inputgroup">
            <div class="input">
                        <label style="color:black; font-weight: bold;" for="fname">First name</label><br>
                        <input type="text" id="fname" placeholder="Pleas enter first name">
                    </div>
                    <div class="input">
                        <label style="color:black; font-weight: bold;" for="mname">Middel name</label><br>
                        <input type="text" id="mname" placeholder="Pleas enter first name">
                    </div>
                    <div class="input">
                        <label style="color:black; font-weight: bold;" for="lname">Last name</label><br>
                        <input type="text" id="lname" placeholder="Pleas enter first name">
                    </div>
                    <div class="input">
                        <label style="color:black; font-weight: bold;" for="age">Username</label><br>
                        <input type="text" id="age" placeholder="Pleas enter age">
                    </div>
                    <div class="input">
                        <label style="color:black; font-weight: bold;" for="Wereda">email</label><br>
                        <input type="email" id="username" placeholder="Pleas enter username">
                    </div>
                    
                    <div class="input">
                        <label style="color:black; font-weight: bold;" for="phone">password</label><br>
                        <input type="text" id="email" placeholder="Pleas enter email"
                            style="height: 2.5rem; border-radius: .3rem; margin-top: .25rem;">
                    </div>
                    <div class="input" style="margin-top: 1rem;">
                        <label style="color:black; font-weight: bold;" for="sex">Sex(Gender)</label><br>
                        <select name="sex" id="">
                            <option selected disabled="">Please select sex</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                        </select>
                    </div>
                   
                    <div class="input">
                        <label style="color:black; font-weight: bold;" for="phone">phone</label><br>
                        <input type="number" id="phone" placeholder="Pleas enter phone"
                            style="height: 2.5rem; border-radius: .3rem; margin-top: .25rem;">
                    </div>
                    
            </div>
            <div class="classbn">
                <div class="buttt"><a href="" class="button ok">Update</a>
                  
                </div>

            </div>
        </div>

</html>