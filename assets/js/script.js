// Monthly Chart
const ctxMonthly = document.getElementById("monthlyChart").getContext("2d");
const monthlyChart = new Chart(ctxMonthly, {
  type: "line",
  data: {
    labels: [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "Mei",
      "Jun",
      "Jul",
      "Agu",
      "Sep",
      "Oct",
    ],
    datasets: [
      {
        label: "Perkara Masuk",
        data: [120, 150, 140, 180, 160, 190, 175, 200, 185, 210],
        borderColor: "#ffc107",
        backgroundColor: "rgba(255, 193, 7, 0.1)",
        tension: 0.4,
        fill: true,
        borderWidth: 3,
      },
      {
        label: "Perkara Selesai",
        data: [100, 130, 125, 155, 145, 165, 160, 175, 170, 180],
        borderColor: "#28a745",
        backgroundColor: "rgba(40, 167, 69, 0.1)",
        tension: 0.4,
        fill: true,
        borderWidth: 3,
      },
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: true,
    plugins: {
      legend: {
        display: true,
        position: "top",
        labels: {
          usePointStyle: true,
          padding: 15,
          font: {
            size: 12,
            weight: "bold",
          },
        },
      },
      tooltip: {
        backgroundColor: "rgba(0, 0, 0, 0.8)",
        padding: 12,
        titleFont: {
          size: 14,
          weight: "bold",
        },
        bodyFont: {
          size: 13,
        },
        cornerRadius: 8,
      },
    },
    scales: {
      y: {
        beginAtZero: true,
        grid: {
          color: "rgba(0, 0, 0, 0.05)",
        },
      },
      x: {
        grid: {
          display: false,
        },
      },
    },
  },
});

// Pie Chart
const ctxPie = document.getElementById("pieChart").getContext("2d");
const pieChart = new Chart(ctxPie, {
  type: "doughnut",
  data: {
    labels: ["Pidana", "Perdata", "TUN", "Agama"],
    datasets: [
      {
        data: [450, 380, 215, 200],
        backgroundColor: ["#dc3545", "#0dcaf0", "#0d6efd", "#198754"],
        borderWidth: 3,
        borderColor: "#fff",
      },
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: true,
    plugins: {
      legend: {
        position: "bottom",
        labels: {
          padding: 15,
          usePointStyle: true,
          font: {
            size: 12,
            weight: "bold",
          },
        },
      },
      tooltip: {
        backgroundColor: "rgba(0, 0, 0, 0.8)",
        padding: 12,
        titleFont: {
          size: 14,
          weight: "bold",
        },
        bodyFont: {
          size: 13,
        },
        cornerRadius: 8,
        callbacks: {
          label: function (context) {
            const label = context.label || "";
            const value = context.parsed || 0;
            const total = context.dataset.data.reduce((a, b) => a + b, 0);
            const percentage = ((value / total) * 100).toFixed(1);
            return label + ": " + value + " (" + percentage + "%)";
          },
        },
      },
    },
  },
});

// Add smooth scroll
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
      });
    }
  });
});

// Animate numbers on page load
window.addEventListener("load", function () {
  const statValues = document.querySelectorAll(".stat-value");
  statValues.forEach((stat) => {
    const target = parseInt(stat.textContent.replace(/,/g, ""));
    if (!isNaN(target)) {
      let current = 0;
      const increment = target / 50;
      const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
          stat.textContent = target.toLocaleString();
          clearInterval(timer);
        } else {
          stat.textContent = Math.floor(current).toLocaleString();
        }
      }, 20);
    }
  });
});
