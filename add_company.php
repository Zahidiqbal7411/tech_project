
<?php require_once("incs/main.php")?>
<header>
<tr><td><?php require_once("incs/header.php")?></td></tr>
<tr><td><?php require_once("incs/topmenu.php")?></td></tr>
</header>
<main>
<section>
<div class="form-group">
<h2 colspan="2">Add Company</h2>
    <form action="" method="post">
        
     <label for="company_name" >Company Name:</label>
     <input type="text" id="name" name="company_name"  placeholder="Enter Your name" class="input_style" required>
    
    <label for="company_email">Company Email</label>
    <input type="email" id="email" name="company_email"  placeholder="Enter your email" class="input_style"  required>

    <label for="name">Website</label>
    <input type="url" id="company_website" name="company_website"  class="input_style"  required>
    <label for="name">Location</label>
    <input type="text" id="company_location" name="company_location" placeholder="Enter your location" class="input_style"  required>
    <label for="name">Company Phone</label>
    <input type="tel" id="phone" name="company_phone"  placeholder="Enter your phone No" class="input_style"  required>
    <label for="name">Founded year</label>
    <input type="number" id="founded_year" name="founded_year"  placeholder="Enter founded year of company" class="input_style"  required>
    <label for="name">Company Address</label>
    <input type="text" id="address" name="company_address"  placeholder="Enter company address" class="input_style"  required>
    <label for="name">Company facebook</label>
    <input type="url" id="" name="company_facebook"  placeholder="Enter url of company facebook" class="input_style"  required>
    
    <label for="name">Industry</label>
    <div class="custom-select" style="width:200px"> 
    <select >
    <option value="-1" >Select field</option>
    <option value="1">Tech</option>
    <option value="2">Healthcare</option>
    <option value="3">Fashion</option>
    <option value="4">Finance</option>
    </select>
    </div>
    <label for="industry" id="comp-des">Company description</label>
    <textarea id="industry" name="industry" row="20"  class="input_style"  required></textarea>
    <button type="submit" class="submit-btn" >Submit</button> 
</form>
</div>
</section>
</main>
<form>
    <div>
    <label>Arithematics operations</label>
    <select>
    <option value="-1">please select any field</option>
    <option value="+">please select any field</option>
    <option value="sub">please select any field</option>
    <option value="/">please select any field</option>    
</select>
    </div>
</form>
<footer>
    <?php require_once("incs/footer.php")?>
</footer>

