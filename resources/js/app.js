import './bootstrap';

function formatCounts() {
  const elements = document.querySelectorAll('[data-count]');
  const numberFormat = new Intl.NumberFormat(); // Uses the user's locale by default

  elements.forEach((element) => {
    const count = element.getAttribute('data-count');
    const formattedCount = numberFormat.format(count);
    element.textContent = formattedCount;
  });
}

window.onload = function() {
  formatCounts();
};
