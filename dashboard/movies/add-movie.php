<?php include('../base/header.php'); ?>

<div class="am-wrapper">

    <div class="am-header">
        <h2>Add New Movie</h2>
        <p>Fill movie details carefully before publishing.</p>
    </div>

    <form class="am-form">

        <div class="am-grid">

            <div class="am-field">
                <label>Movie Title</label>
                <input type="text" placeholder="Enter movie title">
            </div>

            <div class="am-field">
                <label>Genre</label>
                <input type="text" placeholder="Action / Drama / Horror">
            </div>

            <div class="am-field">
                <label>Language</label>
                <input type="text" placeholder="English / Hindi / Urdu">
            </div>

            <div class="am-field">
                <label>Duration</label>
                <input type="text" placeholder="2h 30m">
            </div>

            <div class="am-field">
                <label>Release Date</label>
                <input type="date">
            </div>

            <div class="am-field">
                <label>IMDb Rating</label>
                <input type="text" placeholder="8.5">
            </div>

            <div class="am-field">
                <label>Status</label>
                <select>
                    <option>Now Showing</option>
                    <option>Upcoming</option>
                    <option>Coming Soon</option>
                </select>
            </div>

            <div class="am-field">
                <label>Age Restriction</label>
                <input type="text" placeholder="PG-13 / 18+">
            </div>

            <div class="am-field">
                <label>Poster Image</label>
                <input type="file">
            </div>

            <div class="am-field">
                <label>Banner Image</label>
                <input type="file">
            </div>

            <div class="am-field am-full">
                <label>Trailer URL</label>
                <input type="text" placeholder="https://youtube.com/...">
            </div>

            <div class="am-field am-full">
                <label>Description</label>
                <textarea rows="5" placeholder="Enter movie description"></textarea>
            </div>

        </div>

        <button type="submit" class="am-btn">Add Movie</button>

    </form>

</div>

<?php include('../base/footer.php'); ?>