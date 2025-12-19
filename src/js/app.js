import '../css/app.css';

if(import.meta.hot) {
    import.meta.hot.accept();
    import.meta.hot.dispose(() => {
        console.log('HMR');
    });
}