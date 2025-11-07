<form action="" method="">
<h2>Create a New Postcard</h2>

<!-- Postcard Name -->
<div>
    <label for="name">Postcard Name:</label>
    <input 
    type="text" 
    id="name" 
    name="name" 
    required
    >

    <!-- Skill Level -->
    <label for="skill">Skill Level:</label>
    <input 
    type="number"
    id="skill" 
    name="skill" 
    required
    >
    <!-- Bio -->
    <label for="bio">Bio:</label>
    <textarea
    rows="S" 
    id="bio"
    name="bio" 
    required
    ></textarea>
    <!-- Tojo Selection -->
    <label for="tojo_id">Select Tojo:</label>
    <select id="tojo_id" name="tojo_id" required>
        <!-- Options will be populated dynamically -->
        <option value="" disabled selected>Select Tojo</option>
    </select>

    <!-- validation errors -->
</div>

</form>