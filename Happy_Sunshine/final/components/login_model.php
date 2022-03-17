<div class="main_container" id="login_container">
    <h1 id="login_instruction">Enter your name and phone numbers to view your recent orders</h1>    
    <div class="input_field_container">
        <form action="#">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name..." class="input_field" required>
            <label for="phone_number">Phone Number</label>
            <input maxlength="9" type="tel" id="phone_number" name="phone_number" placeholder="0000000000" class="input_field" pattern="[0-9]{9}" required>
            <input type="submit" value="View your recent orders" class="btn form_btn" id="login_btn">
        </form>
    </div>
</div>