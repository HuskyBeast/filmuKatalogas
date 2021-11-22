<div>
    <h1 class="text-xl text-bold py-5">Settings</h1>
    <hr>
    <form action="{{ url('/user/changeSettings/') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">
            Username<br><input type="text" name="name" id="name">
        </label>
        <br>
        <label for="oldEmail">
            Enter Your Current Email<br><input type="email" name="oldEmail" id="oldEmail">
        </label>
        <br>
        <label for="email">
            Change Email<br><input type="email" name="email" id="email">
        </label>
        <br>
        <label for="password">
            Password<br><input type="password" name="password" id="password">
        </label>
        <br>
        <label for="confirmPassword">
            Confirm Password<br><input type="password" name="confirmPassword" id="confirmPassword">
        </label>
        <div>
            <p>Pick Your Gender</p>
            <label for="gender1">
                Male
                <input type="radio" name="gender" value="Male" id="gender1">
            </label>
            <label for="gender2">
                Female
                <input type="radio" name="gender" value="Female" id="gender2">
            </label>
            <label for="gender3">
                Other
                <input type="radio" name="gender" value="Other" id="gender3">
            </label>
        </div>
        <label for="age">
            Enter Your Age
            <br>
            <input type="number" name="age" id="age">
        </label>
        <br>
        <label for="location">
            Enter Your Location<br>
            <input type="text" name="location" id="location">
        </label>
        <br>
        <label for="icon">
            Upload Your Avatar
            <br>
            <input type="file" name="icon" id="icon">
        </label>
        <br>
        <label for="banner">
            Upload Your Banner
            <br>
            <input type="file" name="banner" id="banner">
        </label>
        <br>
        <input class="p-2 my-5 border-blue-500 border-2 text-blue-500" type="submit" value="Update Settings">
    </form>
</div>