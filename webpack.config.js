'use strict';

const isObject = item => {
  return (item && typeof item === 'object' && !Array.isArray(item) && item !== null);
};

const mergeDeep = (target, source) => {
  if (isObject(target) && isObject(source)) {
    for (const key in source) {
      if (isObject(source[key])) {
        if (!target[key]) Object.assign(target, { [key]: {} });
        mergeDeep(target[key], source[key]);
      } else {
        Object.assign(target, { [key]: source[key] });
      }
    }
  }

  return target;
};

const _configs = {
  global: require(__dirname + '/config/webpack/global'),

  production: require(__dirname + '/config/webpack/environments/production'),
  development: require(__dirname + '/config/webpack/environments/development')
};

const _load = function(ENV) {
  return mergeDeep(_configs.global(ENV, __dirname), _configs[ENV](ENV, __dirname));
};

module.exports = _load(process.env.NODE_ENV);
