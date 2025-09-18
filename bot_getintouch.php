<style>
.get-in-touch {
  background:#000000;
  color: white;
  padding: 3rem 4rem;
  border-radius: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  max-width: 1200px;
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
  gap: 3rem;
  margin: 7rem auto;
  position: relative;
  overflow: hidden;
}

/* Dark overlay for readability */
/* .get-in-touch::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 10px;
  z-index: 1;
} */

.get-in-touch .text-content,
.get-in-touch .btn {
  position: relative;
  z-index: 2;
}

.get-in-touch h2 {
  color: #ffffff;
  margin: 0;
  font-size: 1.8rem;
}

.get-in-touch p {
  margin-top: 0.5rem;
  font-size: 1rem;
  color: #ffffff;
  font-weight:bold ;
}

.get-in-touch .btn {
  background-color: white;
  color: black;
  padding: 0.5rem 1rem;        /* bigger button */
  font-size: 1.1rem;         /* larger text */
  border: none;
  border-radius: 50px;       /* more rounded */
  font-weight: bold;
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 10px;
  transition: all 0.3s ease;
  white-space: nowrap;
  text-decoration: none;
  margin-top:25px;
}

.get-in-touch .btn:hover {
  background-color: #eaeaea;
  transform: translateX(3px);
}


.arrow {
  font-size: 1.2rem;
}

.text-content {
  max-width: 70%;
}

/* Responsive styles */
@media (max-width: 768px) {
  .get-in-touch {
    flex-direction: column;
    text-align: center;
    padding: 2rem;
  }

  .text-content {
    max-width: 100%;
  }

  .get-in-touch .btn {
    align-self: center;
  }
}
</style>
</head>
<body>
  <div class="get-in-touch">
    <div class="text-content">
      <h2>F1 can help you</h2>
      <p>Get in touch with our in-house experts to find the right solution for your IT Infrastructure.</p>
    </div>
    <a href="contact.php" class="btn">Get in Touch <span class="arrow">→</span></a>
  </div>
