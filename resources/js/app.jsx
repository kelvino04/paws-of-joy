import React from 'react';
import { createRoot } from 'react-dom/client';

import Header from './header.jsx';
import Footer from './footer.jsx';
import ContactForm from './contactForm.jsx';
import LoadingScreen from './loadingScreen.jsx';


// Loading screen
const hasSeenLoadingScreen = sessionStorage.getItem('hasSeenLoadingScreen');

if (!hasSeenLoadingScreen) {
    const loadingScreenElement = document.getElementById('LoadingScreen');

    if (loadingScreenElement) {
        const loadingScreenRoot = createRoot(loadingScreenElement);
        loadingScreenRoot.render(<LoadingScreen />);
    }

    sessionStorage.setItem('hasSeenLoadingScreen', 'true');

    setTimeout(() => {
        const loadingScreen = document.getElementById('loadingScreen');

        if (loadingScreen) {
            loadingScreen.classList.add('opacity-0');

            setTimeout(() => {
                loadingScreen.remove();
            }, 700);
        }
    }, 4000);
} else {
    document.getElementById('LoadingScreen')?.remove();
}


// Header
const headerElement = document.getElementById('Header');

if (headerElement) {
    const headerRoot = createRoot(headerElement);
    headerRoot.render(<Header />);
}


// Footer
const footerElement = document.getElementById('Footer');

if (footerElement) {
    const footerRoot = createRoot(footerElement);
    footerRoot.render(<Footer />);
}


// Contactformulier
const contactFormElement = document.getElementById('ContactForm');

if (contactFormElement) {
    const contactFormRoot = createRoot(contactFormElement);
    contactFormRoot.render(<ContactForm />);
}


// Pagina zichtbaar maken nadat React gestart is
requestAnimationFrame(() => {
    const pageContent = document.getElementById('page-content');

    if (pageContent) {
        pageContent.style.visibility = 'visible';
    }
});


// Loading screen na 2 seconden laten verdwijnen
setTimeout(() => {
    const loadingScreen = document.getElementById('loadingScreen');

    if (loadingScreen) {
        loadingScreen.classList.add('opacity-0');

        setTimeout(() => {
            loadingScreen.remove();
        }, 700);
    }
}, 2000);
