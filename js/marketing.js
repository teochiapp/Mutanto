/**
 * Mutanto - Marketing Page Scroll Reveal Animations
 * Uses native IntersectionObserver for high performance, smooth 60fps animations.
 */
document.addEventListener('DOMContentLoaded', () => {
  const revealElements = document.querySelectorAll('.reveal-on-scroll, [data-reveal]');

  if (!revealElements.length) return;

  // Fallback for older browsers without IntersectionObserver
  if (!('IntersectionObserver' in window)) {
    revealElements.forEach(el => el.classList.add('is-revealed'));
    return;
  }

  // Configure observer
  const observerOptions = {
    root: null,
    rootMargin: '0px 0px -50px 0px', // Triggers slightly before element reaches bottom
    threshold: 0.12
  };

  const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-revealed');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // Check each element: if already in initial viewport, reveal smoothly; otherwise observe
  revealElements.forEach(el => {
    const rect = el.getBoundingClientRect();
    const isInViewport = rect.top < window.innerHeight && rect.bottom > 0;

    if (isInViewport) {
      setTimeout(() => {
        el.classList.add('is-revealed');
      }, 100);
    } else {
      revealObserver.observe(el);
    }
  });
});
