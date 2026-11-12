<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <Title>UpdateStudent</Title>
    <style>
    form {
            width: 400px;
            margin: 30px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
    
    .form_group {
        display: flex;
        flex-direction: column;
        margin-bottom: 15px;
    }

    label{
        font-weight: bold;
    }
    button {
            width: 100%;
            padding: 12px;
            background-color: #2563eb;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    button:hover{
        background-color: #1d4ed8;
    }
    </style>
</head>

<body>
    <h1 style="text-align: center;">SỬA SINH VIÊN </h1>
    <form action="index.php?action=update&stid=<?= $sv['id'] ?>" method="post" style="text-align: center;">
        <div class="form_group"> <label>Name: </label> <input type="text" name="name" id="name"
                value="<?= $sv['name'] ?>" required> <br>
        </div>
        <div class="form_group"> <label>Age: </label> <input type="number" name="age" id="age" min="1"
                value="<?= $sv['age'] ?>" required> <br>
        </div>
        <div class="form_group"> <label>University: </label> <input type="text" name="university" id="university"
                value="<?= $sv['university'] ?>" required> <br>
        </div>
        <button type="submit">submit</button>
    </form>
</body>

</html>