var lazyLoadInstance;
window.addEventListener('load', (e)=> {
    lazyLoadInstance = new LazyLoad({
      // Your custom settings go here
    });
    console.log('lazyload Init');
})