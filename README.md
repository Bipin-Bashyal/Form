
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>
        User Registration Form
    </h1>
    <hr>
    <form>
        <label for="name">
          Name
        </label>
        <input id="name" type="text" value="name">
        <br>
        <br>
        <label for="password">
            password
        </label>
        <input id="password" type="password">
        <br>
        <br>
        <label for="email">E-mail</label>
        <input id="email" type="email">
        <br>
        <br>
    <select>
        <option disabled value="1">
        --Please slect your age--
        </option>
        <option value="18-25">18-25</option>
        <option value="25-30">25-30</option>
        <option value="30-40">30-40</option>
        <option value="40-50">40-50</option>
        <option value="50-60">50-60</option>
        <option value="60-70">60-70</option>
        <option value="70-80">70-80</option>
      </select>  
      <br>
      <br>
      <fieldset>
          <legend>
                Choose a Gender:
          </legend>
            <input id="Male" type="radio" name="Gender">
            <label for="Male">Male</label>
            <input id="Female" type="radio" name="Gender">
            <label for="Female">Female</label>
            <input id="Other" type="radio" name="Gender">
            <label for="Other">Other</label>
        </fieldset>
        <br>
        <fieldset>
            <legend>Choose hobbies</legend>
            <input id="singing" type="checkbox">
            <label for="singing">Singing</label>
            <input id="dancing" type="checkbox">
            <label for="dancing">Dancing</label>
            <input id="coding" type="checkbox">
            <label for="coding">Coding</label>
            <input id="reading" type="checkbox">
            <label for="reading">Reading</label>
        </fieldset>
        <br> 
        <select>
            <option disabled value="1">-- Please choose your Country--</option>
            <option value="nepal">Nepal</option>
            <option value="USA">USA</option>
            <option value="UAE">UAE</option>
            <option value="UK">UK</option>
            <option value="Africa">Africa</option>
            <option value="India">India</option>
            <option value="China">China</option>
            <option value="Bangaladesh">Bangladesh</option>
        </select>
        <br>
        <br>
        <label for="fileupload">File Upload</label>
        <input type="file" >
        <br>
        <br>
        <button>Submit</button>
    </form>
</body>
</html>
