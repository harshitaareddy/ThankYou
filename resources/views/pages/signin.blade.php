@extends('layouts.default  ')

@section('content')
    <div class='card color '>
        <h2>Model Login Form</h2>


        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <br>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <br>


            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                Cancel
            </button>
            <span class="psw"> <a href="/">Forgot password?</a></span>
        </div>
        </form>
    </div>
    </div>

    <script>
                var modal = document.getElementById('id01');

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    </body>
    </html>






@endsection