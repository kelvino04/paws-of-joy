import React, { useState } from 'react';
import { createRoot } from 'react-dom/client';

import Header from './header.jsx';
import Footer from './footer.jsx';
import ContactForm from './contactForm.jsx';
import LoadingScreen from './loadingScreen.jsx';
import SuccessMessage from './successMessage.jsx';

if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
}


// Contactformulier + succesmelding
function ContactFormWrapper() {
    const [successMessage, setSuccessMessage] = useState('');

    return (
        <>
            <ContactForm onSuccess={setSuccessMessage} />

            <SuccessMessage
                message={successMessage}
                onClose={() => setSuccessMessage('')}
            />
        </>
    );
}


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
    contactFormRoot.render(<ContactFormWrapper />);
}


// Pagina zichtbaar maken nadat React gestart is
requestAnimationFrame(() => {
    const pageContent = document.getElementById('page-content');

    if (pageContent) {
        pageContent.classList.add('page-loaded');
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


const revealElements = document.querySelectorAll('.reveal');

const revealObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('reveal-visible');
                revealObserver.unobserve(entry.target);
            }
        });
    },
    {
        threshold: 0.15,
    }
);

revealElements.forEach((element) => {
    revealObserver.observe(element);
});


const contactElements = document.querySelectorAll(
    '.contact-slide-left, .contact-slide-right'
);

const contactObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                contactObserver.unobserve(entry.target);
            }
        });
    },
    {
        threshold: 0.15,
    }
);

contactElements.forEach((element) => {
    contactObserver.observe(element);
});


// Success message voor Laravel meldingen
const successMessageElement = document.getElementById('SuccessMessage');

if (successMessageElement) {
    const message = successMessageElement.dataset.message;

    if (message) {
        const successMessageRoot = createRoot(successMessageElement);

        successMessageRoot.render(
            <SuccessMessage
                message={message}
                onClose={() => {
                    successMessageRoot.unmount();
                }}
            />
        );
    }
}
