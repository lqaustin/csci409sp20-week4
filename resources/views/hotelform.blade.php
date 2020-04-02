
<form action="/hotels/store" method="post">
    @csrf
    <label for="name">Name: </label><br>
    <input type="text" id="name" name="name"><br>

    <label for="address_1">Address 1: </label><br>
    <input type="text" id="address_1" name="address_1">

    <label for="address_2">Address 2: </label><br>
    <input type="text" id="address_2" name="address_2">

    <label for="city">City: </label><br>
    <input type="text" id="city" name="city">

    <label for="state">State: </label><br>
    <input type="text" id="state" name="state">

    <label for="sip">Zip: </label><br>
    <input type="text" id="zip" name="zip">

    <label for="desc">Description: </label><br>
    <input type="text" id="desc" name="desc">

    <label for="img">Image: </label><br>
    <input type="text" id="img" name="img">

    <input type="submit" value="Submit">
</form>
