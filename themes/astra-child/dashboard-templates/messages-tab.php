<div class="container">

    <!-- Top Bar -->
    <div class="top-bar">
      <h1 class="ab-header-title">Message</h1>
      <div class="pt-search-box">
        <span class="pt-search-icon">🔍</span>
        <input type="text" id="searchInput" class="pt-search-input" placeholder="Search: Client Name">
      </div>
    </div>

    <div class="main-content">

      <!-- Sidebar -->
      <div class="sidebar" id="sidebar">
        <div class="client" onclick="openChat(this)">
          <img src="https://i.pravatar.cc/60?u=1" alt="Profile">
          <div class="client-info">
            <h4>Rocky Parker</h4>
            <p>You: Okay fine.</p>
            <span>08:36 AM</span>
          </div>
        </div>
        <div class="client" onclick="openChat(this)">
          <img src="https://i.pravatar.cc/60?u=2" alt="Profile">
          <div class="client-info">
            <h4>Sophia Green</h4>
            <p>Hey, how are you?</p>
            <span>09:15 AM</span>
          </div>
        </div>
        <div class="client" onclick="openChat(this)">
          <img src="https://i.pravatar.cc/60?u=3" alt="Profile">
          <div class="client-info">
            <h4>David Smith</h4>
            <p>Let's meet tomorrow.</p>
            <span>Yesterday</span>
          </div>
        </div>
      </div>

      <!-- Chat Section -->
      <div class="chat-area" id="chatArea">
        <button class="back-btn" onclick="backToList()">← Back</button>
        <div class="chat-box">
          <div class="message left">Hi, How are you doing?</div>
          <div class="message left">How can I help you</div>
          <div class="message right">I want to know more</div>
        </div>

        <div class="input-area">
          <input type="text" placeholder="type your message">
          <button>&#9658;</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Open chat on mobile
    function openChat(el) {
      if (window.innerWidth <= 768) {
        document.getElementById("sidebar").style.display = "none";
        document.getElementById("chatArea").style.display = "flex";
      }
    }

    // Back to client list on mobile
    function backToList() {
      document.getElementById("chatArea").style.display = "none";
      document.getElementById("sidebar").style.display = "block";
    }

    // Search filter
    document.getElementById("searchInput").addEventListener("keyup", function() {
      let filter = this.value.toLowerCase();
      let clients = document.querySelectorAll(".client");

      clients.forEach(client => {
        let name = client.querySelector("h4").innerText.toLowerCase();
        client.style.display = name.includes(filter) ? "flex" : "none";
      });
    });
  </script>