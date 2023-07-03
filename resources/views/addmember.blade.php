<h1>Add Member</h1>
<form action="" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name="name" placeholder="Enter Name"> <br> <br>
    <label>Email</label>
    <input type="email" name="email" placeholder="Enter Email"> <br> <br>
    <label>Address</label>
    <input type="text" name="address" placeholder="Enter Address"> <br> <br>
<button type="submit"> Add Member</button>
</form>