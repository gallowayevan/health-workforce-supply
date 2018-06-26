let globalEnv = {
    development: {
      ROOT_API: "data/region/"
    },
   production: {
    ROOT_API: "https://workforceblog-dept-healthworkforce.cloudapps.unc.edu/supply/data/region/"
    }
  };
  
  export default function env(property){
    return globalEnv[process.env.NODE_ENV][property];
  };