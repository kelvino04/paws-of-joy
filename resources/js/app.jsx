import React from 'react';
import { createRoot } from 'react-dom/client';
import Header from './header.jsx';

const root = createRoot(document.getElementById('Header'));

root.render(
    <Header />
);
