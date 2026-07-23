(() => {
  const componentSelector = '[data-ps-component="moro-announcement-bar"]';
  const itemSelector = '[data-ps-ref="announcement-item"]';
  const activeClass = 'moro-announcement-bar__message--active';

  const parseInterval = (root) => {
    const fallbackInterval = 5000;
    const rawData = root.getAttribute('data-ps-data');

    if (!rawData) {
      return fallbackInterval;
    }

    try {
      const parsed = JSON.parse(rawData);
      const interval = Number(parsed.interval);

      return Number.isFinite(interval) && interval >= 1000 ? interval : fallbackInterval;
    } catch (_error) {
      return fallbackInterval;
    }
  };

  const setActiveItem = (root, items, activeIndex) => {
    items.forEach((item, index) => {
      const isActive = index === activeIndex;

      item.classList.toggle(activeClass, isActive);
      item.setAttribute('aria-hidden', isActive ? 'false' : 'true');

      if (item instanceof HTMLAnchorElement) {
        if (isActive) {
          item.removeAttribute('tabindex');
        } else {
          item.setAttribute('tabindex', '-1');
        }
      }
    });

    const activeItem = items[activeIndex];
    const background = activeItem.getAttribute('data-background');
    const color = activeItem.getAttribute('data-color');

    if (background) {
      root.style.setProperty('--moro-announcement-bg', background);
    }

    if (color) {
      root.style.setProperty('--moro-announcement-color', color);
    }
  };

  const initAnnouncementBar = (root) => {
    const items = Array.from(root.querySelectorAll(itemSelector));

    if (items.length <= 1) {
      return;
    }

    const interval = parseInterval(root);
    let activeIndex = 0;

    setActiveItem(root, items, activeIndex);

    window.setInterval(() => {
      activeIndex = (activeIndex + 1) % items.length;
      setActiveItem(root, items, activeIndex);
    }, interval);
  };

  document.querySelectorAll(componentSelector).forEach((root) => {
    if (root instanceof HTMLElement) {
      initAnnouncementBar(root);
    }
  });
})();
