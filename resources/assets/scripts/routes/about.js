export default {
  init() {
    // JavaScript to be fired on the about us page

    document.addEventListener('routed', e => {
      const routeName = e.detail.route;

      console.log(routeName);
    });
  },
};
