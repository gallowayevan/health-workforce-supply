let globalEnv = {
    development: {
      ROOT_API: "data/"
    },
   production: {
    ROOT_API: "https://workforceblog-dept-healthworkforce.cloudapps.unc.edu/supply/data/"
    }
  };
  
  export default function env(property){
    return globalEnv[process.env.NODE_ENV][property];
  };