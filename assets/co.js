    $(document).ready(function () {
        $('#example').DataTable();
    });


// <!-- Logout Confirmation -->
    function logout() {
        return confirm("Are you sure you want to log out?");
    }


// <!-- Current Time Display -->
    function updateTime() {
        const currentTimeElement = document.getElementById("current-time");
        if (!currentTimeElement) return;
        const now = new Date();
        const hours = now.getHours() % 12 || 12;
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const ampm = now.getHours() >= 12 ? 'PM' : 'AM';
        currentTimeElement.textContent = `${hours}:${minutes} ${ampm}`;
    }
    updateTime();
    setInterval(updateTime, 1000);


// <!-- Current Date Display -->
    function displayCurrentDate() {
        const dateElement = document.getElementById("current-date");
        if (!dateElement) return;
        const today = new Date();
        const year = today.getFullYear();
        const month = String(today.getMonth() + 1).padStart(2, '0');
        const day = String(today.getDate()).padStart(2, '0');
        dateElement.textContent = `${year}-${month}-${day}`;
    }
    displayCurrentDate();
