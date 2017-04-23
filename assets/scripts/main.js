/** import external dependencies */
import 'jquery';

/** import local dependencies */
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import caseStudies from './routes/case-studies';
import company from './routes/company';
import aboutUs from './routes/about';
import contact from './routes/contact';

/**
 * Populate Router instance with DOM routes
 * @type {Router} routes - An instance of our router
 */
const routes = new Router({

  common,
  home,
  company,
  contact,
  aboutUs,
  pageTemplateCaseStudyListBlade: caseStudies, // The loop overrides the body class outputed
});

/** Load Events */
jQuery(document).ready(() => routes.loadEvents());
