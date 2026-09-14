import React from 'react';
import { createRoot } from 'react-dom/client';
import Header from './header.jsx';
import Footer from './footer.jsx';

const headerRoot = createRoot(document.getElementById('Header'));
const footerRoot = createRoot(document.getElementById('Footer'));

headerRoot.render(<Header />);
footerRoot.render(<Footer />);
